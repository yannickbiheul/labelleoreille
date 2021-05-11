<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'phraseTitre' => 'Des voix en mémoire',
            'phrase' => "Quoi de plus riche et émouvant que d’entendre
            et de conserver la voix de ceux que l’on aime",
            'description' => 'Réalisation de reportage audio pour les particuliers et les professionnels'
        ]);
    }
}
