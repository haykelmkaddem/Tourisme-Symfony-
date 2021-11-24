<?php

namespace App\Controller;

use App\Entity\EvenPopularite;
use App\Form\EvenPopulariteType;
use App\Repository\EvenPopulariteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/even/popularite")
 */
class EvenPopulariteController extends AbstractController
{
    /**
     * @Route("/", name="even_popularite_index", methods={"GET"})
     */
    public function index(EvenPopulariteRepository $evenPopulariteRepository): Response
    {
        return $this->render('even_popularite/index.html.twig', [
            'even_popularites' => $evenPopulariteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="even_popularite_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $evenPopularite = new EvenPopularite();
        $form = $this->createForm(EvenPopulariteType::class, $evenPopularite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($evenPopularite);
            $entityManager->flush();

            return $this->redirectToRoute('even_popularite_index');
        }

        return $this->render('even_popularite/new.html.twig', [
            'even_popularite' => $evenPopularite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="even_popularite_show", methods={"GET"})
     */
    public function show(EvenPopularite $evenPopularite): Response
    {
        return $this->render('even_popularite/show.html.twig', [
            'even_popularite' => $evenPopularite,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="even_popularite_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, EvenPopularite $evenPopularite): Response
    {
        $form = $this->createForm(EvenPopulariteType::class, $evenPopularite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('even_popularite_index');
        }

        return $this->render('even_popularite/edit.html.twig', [
            'even_popularite' => $evenPopularite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="even_popularite_delete", methods={"POST"})
     */
    public function delete(Request $request, EvenPopularite $evenPopularite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenPopularite->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evenPopularite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('even_popularite_index');
    }
}
