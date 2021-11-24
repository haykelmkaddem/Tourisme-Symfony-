<?php

namespace App\Controller;

use App\Entity\LieuEven;
use App\Form\LieuEvenType;
use App\Repository\LieuEvenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lieu/even")
 */
class LieuEvenController extends AbstractController
{
    /**
     * @Route("/", name="lieu_even_index", methods={"GET"})
     */
    public function index(LieuEvenRepository $lieuEvenRepository): Response
    {
        return $this->render('lieu_even/index.html.twig', [
            'lieu_evens' => $lieuEvenRepository->findAll(),
        ]);
    }

    /**
     * @Route("/front", name="lieu_even_indexFront", methods={"GET"})
     */
    public function indexfront(LieuEvenRepository $lieuEvenRepository): Response
    {
        return $this->render('lieu_even/indexFront.html.twig', [
            'lieu_evens' => $lieuEvenRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="lieu_even_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $lieuEven = new LieuEven();
        $form = $this->createForm(LieuEvenType::class, $lieuEven);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lieuEven);
            $entityManager->flush();

            return $this->redirectToRoute('lieu_even_index');
        }

        return $this->render('lieu_even/new.html.twig', [
            'lieu_even' => $lieuEven,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lieu_even_show", methods={"GET"})
     */
    public function show(LieuEven $lieuEven): Response
    {
        return $this->render('lieu_even/show.html.twig', [
            'lieu_even' => $lieuEven,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="lieu_even_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LieuEven $lieuEven): Response
    {
        $form = $this->createForm(LieuEvenType::class, $lieuEven);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lieu_even_index');
        }

        return $this->render('lieu_even/edit.html.twig', [
            'lieu_even' => $lieuEven,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lieu_even_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LieuEven $lieuEven): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lieuEven->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lieuEven);
            $entityManager->flush();
        }

        return $this->redirectToRoute('lieu_even_index');
    }
}
