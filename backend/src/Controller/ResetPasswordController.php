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
    ) {}

    #[Route('', name: 'app_forgot_password_request', methods: ['POST'])]
    public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? null;
        if (!$email) {
            return $this->json(['error' => 'Email requis'], 400);
        }
        return $this->processSendingPasswordResetEmail($email, $mailer, $translator);
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

    #[Route('/reset/{token}', name: 'app_reset_password', methods: ['POST'])]
    public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, string $token): JsonResponse
    {
        try {
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            return $this->json(['error' => 'Lien invalide ou expiré'], 400);
        }

        $data = json_decode($request->getContent(), true);
        $plainPassword = $data['password'] ?? null;

        if (!$plainPassword) {
            return $this->json(['error' => 'Mot de passe requis'], 400);
        }

        $this->resetPasswordHelper->removeResetRequest($token);

        $user->setPassword(
            $passwordHasher->hashPassword($user, $plainPassword)
        );

        $this->entityManager->flush();

        return $this->json(['message' => 'Mot de passe réinitialisé avec succès']);
    }


    private function processSendingPasswordResetEmail( string $emailFormData,  MailerInterface $mailer, TranslatorInterface $translator ): RedirectResponse
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
            'email' => $emailFormData,
        ]);
        if (!$user) {
            return new JsonResponse(['message' => 'Si un compte existe, un mail sera envoyé.'], 200);
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
        return new JsonResponse(['message' => 'Mail envoyé avec le lien de réinitialisation.'], 200);
    }
}
