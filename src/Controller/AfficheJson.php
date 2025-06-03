<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;

class AfficheJson extends AbstractController
{
    #[Route('/affiche-json', name: 'affiche_json')]
    public function index()
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        $data = $response->toArray();

        return $this->render('afficheJson/index.html.twig', [
            'data' => $data,
        ]);
    }
}
