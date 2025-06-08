<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileEditFormType;
use App\Form\AvatarUploadType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[IsGranted('ROLE_USER')]
final class UserProfileController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly SluggerInterface $slugger,
        private readonly string $avatarsDirectory
    ) {}

    #[Route('/api/profil', name: 'app_user_profile', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(): JsonResponse
    {
        $user = $this->getUser();
        return $this->json([
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'avatar' => $user->getAvatar(),
        ]);
    }

    #[Route('/mon-profil/modifier', name: 'app_user_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $form = $this->createForm(ProfileEditFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Votre profil a été mis à jour.');

            return $this->redirectToRoute('app_user_profile');
        }

        return $this->render('user_profile/edit.html.twig', [
            'editForm' => $form->createView(),
        ]);
    }

    #[Route('/mon-profil/avatar', name: 'app_user_avatar_upload', methods: ['GET', 'POST'])]
    public function uploadAvatar(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $form = $this->createForm(AvatarUploadType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $avatarFile */
            $avatarFile = $form->get('avatar')->getData();
            
            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$avatarFile->guessExtension();

                try {
                    $avatarFile->move(
                        $this->avatarsDirectory,
                        $newFilename
                    );
                    if ($user->getAvatar()) {
                        $oldAvatar = $this->avatarsDirectory.'/'.$user->getAvatar();
                        if (file_exists($oldAvatar)) {
                            unlink($oldAvatar);
                        }
                    } 
                    $user->setAvatar($newFilename);
                    $this->entityManager->flush();
                    
                    $this->addFlash('success', 'Votre avatar a été mis à jour.');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement.');
                }
            }

            return $this->redirectToRoute('app_user_profile');
        }

        return $this->render('user_profile/avatar.html.twig', [
            'uploadForm' => $form->createView(),
        ]);
    }

    #[Route('/mon-profil/supprimer-avatar', name: 'app_user_avatar_delete', methods: ['POST'])]
    public function deleteAvatar(Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        if ($this->isCsrfTokenValid('delete-avatar', $request->request->get('_token'))) {
            if ($user->getAvatar()) {
                $filePath = $this->avatarsDirectory.'/'.$user->getAvatar();
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
                $user->setAvatar(null);
                $this->entityManager->flush();
                $this->addFlash('success', 'Votre avatar a été supprimé.');
            }
        }

        return $this->redirectToRoute('app_user_profile');
    }
}