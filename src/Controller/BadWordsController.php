<?php

namespace App\Controller;

use App\Entity\BadWords;
use App\Form\BadWordsType;
use App\Repository\BadWordsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bad/words")
 */
class BadWordsController extends AbstractController
{
    /**
     * @Route("/", name="bad_words_index", methods={"GET"})
     */
    public function index(BadWordsRepository $badWordsRepository): Response
    {
        return $this->render('bad_words/index.html.twig', [
            'bad_words' => $badWordsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="bad_words_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $badWord = new BadWords();
        $form = $this->createForm(BadWordsType::class, $badWord);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($badWord);
            $entityManager->flush();

            return $this->redirectToRoute('bad_words_index');
        }

        return $this->render('bad_words/new.html.twig', [
            'bad_word' => $badWord,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="bad_words_show", methods={"GET"})
     */
    public function show(BadWords $badWord): Response
    {
        return $this->render('bad_words/show.html.twig', [
            'bad_word' => $badWord,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="bad_words_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, BadWords $badWord): Response
    {
        $form = $this->createForm(BadWordsType::class, $badWord);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bad_words_index');
        }

        return $this->render('bad_words/edit.html.twig', [
            'bad_word' => $badWord,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="bad_words_delete", methods={"DELETE"})
     */
    public function delete(Request $request, BadWords $badWord): Response
    {
        if ($this->isCsrfTokenValid('delete'.$badWord->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($badWord);
            $entityManager->flush();
        }

        return $this->redirectToRoute('bad_words_index');
    }
}
