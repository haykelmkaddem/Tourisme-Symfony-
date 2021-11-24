<?php

namespace App\Controller;

use App\Entity\AvisDestination;
use App\Form\AvisDestinationType;
use App\Repository\AvisDestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/avis/destination")
 */
class AvisDestinationController extends AbstractController
{
    /**
     * @Route("/", name="avis_destination_index", methods={"GET"})
     */
    public function index(AvisDestinationRepository $avisDestinationRepository): Response
    {
        return $this->render('avis_destination/index.html.twig', [
            'avis_destinations' => $avisDestinationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="avis_destination_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $avisDestination = new AvisDestination();
        $form = $this->createForm(AvisDestinationType::class, $avisDestination);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($avisDestination);
            $entityManager->flush();

            return $this->redirectToRoute('avis_destination_index');
        }

        return $this->render('avis_destination/new.html.twig', [
            'avis_destination' => $avisDestination,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="avis_destination_show", methods={"GET"})
     */
    public function show(AvisDestination $avisDestination): Response
    {
        return $this->render('avis_destination/show.html.twig', [
            'avis_destination' => $avisDestination,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="avis_destination_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AvisDestination $avisDestination): Response
    {
        $form = $this->createForm(AvisDestinationType::class, $avisDestination);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('avis_destination_index');
        }

        return $this->render('avis_destination/edit.html.twig', [
            'avis_destination' => $avisDestination,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="avis_destination_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AvisDestination $avisDestination): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avisDestination->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($avisDestination);
            $entityManager->flush();
        }

        return $this->redirectToRoute('avis_destination_index');
    }
}
