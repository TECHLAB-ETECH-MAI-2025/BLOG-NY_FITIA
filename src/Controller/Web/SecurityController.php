<?php

namespace App\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    private $requestStack;
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    #[Route('/', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils): JsonResponse
    {

        $request = $this->requestStack->getCurrentRequest();
        if ($request->isMethod('GET')) {
            return $this->render('security/login.html.twig', [
                'error' => $authenticationUtils->getLastAuthenticationError()
            ]);
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        
        if ($error) {
            return $this->json([
                'error' => $error->getMessageKey(),
                'code' => 'authentication_failed'
            ], 401);
        }

        return $this->json([
            'message' => 'Authentification réussie',
            'user' => $this->getUser() ? $this->getUser()->getUserIdentifier() : null
        ]);
    }
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

}
