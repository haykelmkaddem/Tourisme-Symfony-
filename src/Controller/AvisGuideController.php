<?php

namespace App\Controller;

use App\Entity\AvisGuide;
use App\Form\AvisGuideType;
use App\Repository\AvisGuideRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/avis/guide")
 */
class AvisGuideController extends AbstractController
{
    /**
     * @Route("/", name="avis_guide_index", methods={"GET"})
     */
    public function index(AvisGuideRepository $avisGuideRepository): Response
    {
        return $this->render('avis_guide/index.html.twig', [
            'avis_guides' => $avisGuideRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="avis_guide_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserInterface $user): Response
    {
        $avisGuide = new AvisGuide();
        $form = $this->createForm(AvisGuideType::class, $avisGuide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $avisGuide->setIdUtilisateur($user);
            $entityManager->persist($avisGuide);
            $entityManager->flush();

            return $this->redirectToRoute('guide_index');
        }

        return $this->render('avis_guide/new.html.twig', [
            'avis_guide' => $avisGuide,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/new/{id}", name="avis_guide_new", methods={"GET","POST"})
     */
    public function newa(Request $request): Response
    {
        $avisGuide = new AvisGuide();
        $form = $this->createForm(AvisGuideType::class, $avisGuide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($avisGuide);
            $entityManager->flush();

            return $this->redirectToRoute('avis_guide_index');
        }

        return $this->render('avis_guide/new.html.twig', [
            'avis_guide' => $avisGuide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="avis_guide_show", methods={"GET"})
     */
    public function show(AvisGuide $avisGuide): Response
    {
        return $this->render('avis_guide/show.html.twig', [
            'avis_guide' => $avisGuide,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="avis_guide_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, AvisGuide $avisGuide): Response
    {
        $form = $this->createForm(AvisGuideType::class, $avisGuide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('avis_guide_index');
        }

        return $this->render('avis_guide/edit.html.twig', [
            'avis_guide' => $avisGuide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="avis_guide_delete", methods={"DELETE"})
     */
    public function delete(Request $request, AvisGuide $avisGuide): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avisGuide->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($avisGuide);
            $entityManager->flush();
        }

        return $this->redirectToRoute('avis_guide_index');
    }
}
