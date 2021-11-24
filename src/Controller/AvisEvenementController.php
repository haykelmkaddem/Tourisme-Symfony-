<?php

namespace App\Controller;

use App\Entity\AvisEvenement;
use App\Form\AvisEvenementType;
use App\Repository\AvisEvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/avis/evenement")
 */
class AvisEvenementController extends AbstractController
{
    /**
     * @Route("/", name="avis_evenement_index", methods={"GET"})
     */
    public function index(AvisEvenementRepository $avisEvenementRepository): Response
    {
        return $this->render('avis_evenement/index.html.twig', [
            'avis_evenements' => $avisEvenementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="avis_evenement_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $avisEvenement = new AvisEvenement();
        $form = $this->createForm(AvisEvenementType::class, $avisEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($avisEvenement);
            $entityManager->flush();

            return $this->redirectToRoute('avis_evenement_index');
        }

        return $this->render('avis_evenement/new.html.twig', [
            'avis_evenement' => $avisEvenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="avis_evenement_show", methods={"GET"})
     */
    public function show(AvisEvenement $avisEvenement): Response
    {
        return $this->render('avis_evenement/show.html.twig', [
            'avis_evenement' => $avisEvenement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="avis_evenement_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AvisEvenement $avisEvenement): Response
    {
        $form = $this->createForm(AvisEvenementType::class, $avisEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('avis_evenement_index');
        }

        return $this->render('avis_evenement/edit.html.twig', [
            'avis_evenement' => $avisEvenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="avis_evenement_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AvisEvenement $avisEvenement): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avisEvenement->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($avisEvenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('avis_evenement_index');
    }
}
