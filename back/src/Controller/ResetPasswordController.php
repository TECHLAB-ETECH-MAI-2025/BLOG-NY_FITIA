<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordForm;
use App\Form\ResetPasswordRequestForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager
    ) {
    }

    #[Route('', name: 'app_forgot_password_request')]
    public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(ResetPasswordRequestForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $email */
            $email = $form->get('email')->getData();

            return $this->processSendingPasswordResetEmail($email, $mailer, $translator
            );
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form,
        ]);
    }

    #[Route('/check-email', name: 'app_check_email')]
    public function checkEmail(): Response
    {
        if (null === ($resetToken = $this->getTokenObjectFromSession())) {
            $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
        }

        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
        ]);
    }

    #[Route('/reset/{token}', name: 'app_reset_password')]
    public function reset( Request $request, UserPasswordHasherInterface $passwordHasher,?string $token = null): Response {
        if ($token) {
            $this->storeTokenInSession($token);
            return $this->redirectToRoute('app_reset_password');
        }

        $sessionToken = $this->getTokenFromSession();
        dump("Token en session:", $sessionToken);

        if (null === $sessionToken) {
            $this->addFlash('error', 'Lien de réinitialisation invalide ou expiré.');
            return $this->redirectToRoute('app_forgot_password_request');
        }

        try {
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($sessionToken);
            dump("Utilisateur trouvé:", $user->getEmail());
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('error', 'Ce lien de réinitialisation est invalide ou a expiré.');
            return $this->redirectToRoute('app_forgot_password_request');
        }

        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->resetPasswordHelper->removeResetRequest($sessionToken);

            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $this->entityManager->flush();

            $this->cleanSessionAfterReset();
            
            $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }

    private function processSendingPasswordResetEmail(
        string $emailFormData,
        MailerInterface $mailer,
        TranslatorInterface $translator
    ): RedirectResponse {
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
            'email' => $emailFormData,
        ]);

        if (!$user) {
            return $this->redirectToRoute('app_check_email');
        }

        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
        } catch (ResetPasswordExceptionInterface $e) {
            return $this->redirectToRoute('app_check_email');
        }

        $email = (new TemplatedEmail())
            ->from(new Address('noreply@tonsite.com', 'TonSite'))
            ->to($user->getEmail())
            ->subject('Réinitialisation de votre mot de passe')
            ->htmlTemplate('reset_password/email.html.twig')
            ->context([
                'resetToken' => $resetToken,
                'resetTokenUrl' => $this->generateUrl('app_reset_password', [
                    'token' => $resetToken->getToken(),
                ], UrlGeneratorInterface::ABSOLUTE_URL),
            ]);

        $mailer->send($email);

        $this->setTokenObjectInSession($resetToken);

        return $this->redirectToRoute('app_check_email');
    }


    #[Route('/test-mail')]
    public function testMail(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('test@example.com')
            ->to('recipient@example.com')
            ->subject('Test Mailer')
            ->text('Ceci est un test');

        $mailer->send($email);
        return new Response('Email envoyé!');
    }
}
