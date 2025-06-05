<?php

namespace App\Controller;

use App\Form\FormulaireForm;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function index(ServiceRepository $serviceRepository, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(FormulaireForm::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();    
            $em->persist($data);
            $em->flush($data);
        }
        


        $services = $serviceRepository->findAll();
        return $this->render('contacts/index.html.twig', [
            'form' => $form->createView(),
            'services' => $services
        ]);
    }
}
