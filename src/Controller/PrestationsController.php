<?php

namespace App\Controller;

use App\Repository\PrestationRepository;
use App\Repository\SiteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PrestationsController extends AbstractController
{
    /**
     * @Route("/prestations", name="prestations")
     */
    public function index(SiteRepository $siteRepository, PrestationRepository $prestationRepository): Response
    {
        $sites = $siteRepository->findAll();
        $prestations = $prestationRepository->findAll();
        return $this->render('prestations/index.html.twig', compact('sites', 'prestations'));
    }
}
