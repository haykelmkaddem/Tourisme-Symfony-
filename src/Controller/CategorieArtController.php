<?php

namespace App\Controller;

use App\Entity\CategorieArt;
use App\Form\CategorieArtType;
use App\Repository\CategorieArtRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/categorie/art")
 */
class CategorieArtController extends AbstractController
{
    /**
     * @Route("/", name="categorie_art_index", methods={"GET"})
     */
    public function index(CategorieArtRepository $categorieArtRepository): Response
    {
        return $this->render('categorie_art/index.html.twig', [
            'categorie_arts' => $categorieArtRepository->findAll(),
        ]);
    }

    /**
     * @Route("/front", name="categorie_art_indexFront", methods={"GET"})
     */
    public function indexFront(CategorieArtRepository $categorieArtRepository): Response
    {
        return $this->render('categorie_art/indexFront.html.twig', [
            'categorie_arts' => $categorieArtRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categorie_art_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categorieArt = new CategorieArt();
        $form = $this->createForm(CategorieArtType::class, $categorieArt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categorieArt);
            $entityManager->flush();

            return $this->redirectToRoute('categorie_art_index');
        }

        return $this->render('categorie_art/new.html.twig', [
            'categorie_art' => $categorieArt,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categorie_art_show", methods={"GET"})
     */
    public function show(CategorieArt $categorieArt): Response
    {
        return $this->render('categorie_art/show.html.twig', [
            'categorie_art' => $categorieArt,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="categorie_art_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CategorieArt $categorieArt): Response
    {
        $form = $this->createForm(CategorieArtType::class, $categorieArt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorie_art_index');
        }

        return $this->render('categorie_art/edit.html.twig', [
            'categorie_art' => $categorieArt,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="categorie_art_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CategorieArt $categorieArt): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorieArt->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($categorieArt);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categorie_art_index');
    }
}
