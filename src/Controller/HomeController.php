<?php

namespace App\Controller;

use App\Repository\SiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SiteRepository $siteRepository): Response
    {
        $sites = $siteRepository->findAll();
        return $this->render('home/index.html.twig', compact('sites'));
    }
}
