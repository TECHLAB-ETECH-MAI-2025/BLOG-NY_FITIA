<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationForm;
use App\Security\EmailVerifier;
use App\Security\UserCustomAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    public function __construct(private EmailVerifier $emailVerifier)
    {
    }

    #[Route('/api/register', name: 'api_register', methods: ['POST'])]
    public function register( Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $em, EmailVerifier $emailVerifier ): JsonResponse 
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['email'], $data['password'])) {
            return $this->json(['error' => 'Email and password are required'], 400);
        }
        if (!isset($data['firstName'], $data['lastName'], $data['phone'], $data['email'], $data['password'])) {
            return $this->json(['error' => 'Tous les champs sont requis'], 400);
        }
        $existing = $em->getRepository(User::class)->findOneBy(['email' => $data['email']]);
        if ($existing) {
            return $this->json(['error' => 'Email already used'], 409);
        }
        $user = new User();
        $user->setFirstName($data['firstName']);
        $user->setLastName($data['lastName']);
        $user->setPhone($data['phone']);
        $user->setEmail($data['email']);
        $user->setAvatar('default.jpeg');
        $user->setPassword($passwordHasher->hashPassword($user, $data['password']));
        $em->persist($user);
        $em->flush();
        return $this->json(['success' => true, 'message' => 'Registration successful.']);
    }

}
