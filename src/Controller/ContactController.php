<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\SiteRepository;
use App\Repository\UserRepository;
use App\Service\ContactService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(SiteRepository $siteRepository, 
    UserRepository $userRepository, 
    Request $request, ContactService $contactService): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $contactService->persistContact($contact);
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
        'sites' => $siteRepository->findAll(),
        'admin' => $userRepository->getAdmin(),
        'form' => $form->createView()
        ]);
    }
}
