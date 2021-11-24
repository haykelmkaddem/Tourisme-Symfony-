<?php

namespace App\Controller;

use App\Entity\CategorieEven;
use App\Form\CategorieEvenType;
use App\Repository\CategorieEvenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categorie/even")
 */
class CategorieEvenController extends AbstractController
{
    /**
     * @Route("/", name="categorie_even_index", methods={"GET"})
     */
    public function index(CategorieEvenRepository $categorieEvenRepository): Response
    {
        return $this->render('categorie_even/index.html.twig', [
            'categorie_evens' => $categorieEvenRepository->findAll(),
        ]);
    }

    /**
     * @Route("/front", name="categorie_even_indexFront", methods={"GET"})
     */
    public function indexFront(CategorieEvenRepository $categorieEvenRepository): Response
    {
        return $this->render('categorie_even/indexFront.html.twig', [
            'categorie_evens' => $categorieEvenRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categorie_even_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categorieEven = new CategorieEven();
        $form = $this->createForm(CategorieEvenType::class, $categorieEven);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categorieEven);
            $entityManager->flush();

            return $this->redirectToRoute('categorie_even_index');
        }

        return $this->render('categorie_even/new.html.twig', [
            'categorie_even' => $categorieEven,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categorie_even_show", methods={"GET"})
     */
    public function show(CategorieEven $categorieEven): Response
    {
        return $this->render('categorie_even/show.html.twig', [
            'categorie_even' => $categorieEven,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="categorie_even_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CategorieEven $categorieEven): Response
    {
        $form = $this->createForm(CategorieEvenType::class, $categorieEven);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorie_even_index');
        }

        return $this->render('categorie_even/edit.html.twig', [
            'categorie_even' => $categorieEven,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categorie_even_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CategorieEven $categorieEven): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorieEven->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categorieEven);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categorie_even_index');
    }
}
