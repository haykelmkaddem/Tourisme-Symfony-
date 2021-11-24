<?php

namespace App\Controller;

use App\Entity\LieuMaison;
use App\Form\LieuMaisonType;
use App\Repository\LieuMaisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lieumaison")
 */
class LieuMaisonController extends AbstractController
{
    /**
     * @Route("/", name="lieu_maison_index", methods={"GET","POST"})
     */
    public function index(LieuMaisonRepository $lieuMaisonRepository,Request $request): Response
    {   $lieuMaison = new LieuMaison();
        $form = $this->createForm(LieuMaisonType::class, $lieuMaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lieuMaison);
            $entityManager->flush();

            return $this->redirectToRoute('lieu_maison_index');
        }
        return $this->render('lieu_maison/index.html.twig', [
            'lieu_maisons' => $lieuMaisonRepository->findAll(),
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/new", name="lieu_maison_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $lieuMaison = new LieuMaison();
        $form = $this->createForm(LieuMaisonType::class, $lieuMaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lieuMaison);
            $entityManager->flush();

            return $this->redirectToRoute('lieu_maison_index');
        }

        return $this->render('lieu_maison/new.html.twig', [
            'lieu_maison' => $lieuMaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lieu_maison_show", methods={"GET"})
     */
    public function show(LieuMaison $lieuMaison): Response
    {
        return $this->render('lieu_maison/show.html.twig', [
            'lieu_maison' => $lieuMaison,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="lieu_maison_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LieuMaison $lieuMaison): Response
    {
        $form = $this->createForm(LieuMaisonType::class, $lieuMaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lieu_maison_index');
        }

        return $this->render('lieu_maison/edit.html.twig', [
            'lieu_maison' => $lieuMaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lieu_maison_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LieuMaison $lieuMaison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lieuMaison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lieuMaison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('lieu_maison_index');
    }
}
