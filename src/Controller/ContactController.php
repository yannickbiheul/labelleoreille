<?php

namespace App\Controller;

use App\Repository\SiteRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(SiteRepository $siteRepository, UserRepository $userRepository): Response
    {
        $sites = $siteRepository->findAll();
        return $this->render('contact/index.html.twig', compact('sites'));
    }
}
