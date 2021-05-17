<?php

namespace App\Controller;

use App\Repository\ActuRepository;
use App\Repository\SiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActuController extends AbstractController
{
    /**
     * @Route("/actualités", name="actualités")
     */
    public function index(SiteRepository $siteRepository,
    ActuRepository $actuRepository): Response
    {
        $sites = $siteRepository->findAll();
        $actus = $actuRepository->findAll();
        return $this->render('actu/index.html.twig', compact('sites', 'actus'));
    }
}
