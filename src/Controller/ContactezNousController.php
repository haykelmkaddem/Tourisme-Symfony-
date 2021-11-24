<?php

namespace App\Controller;

use App\Entity\ContactezNous;
use App\Form\ContactezNousType;
use App\Repository\ContactezNousRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/contactez/nous")
 */
class ContactezNousController extends AbstractController
{
    /**
     * @Route("/", name="contactez_nous_index", methods={"GET"})
     */
    public function index(ContactezNousRepository $contactezNousRepository): Response
    {
        return $this->render('contactez_nous/index.html.twig', [
            'contactez_nouses' => $contactezNousRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="contactez_nous_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $contactezNou = new ContactezNous();
        $form = $this->createForm(ContactezNousType::class, $contactezNou);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contactezNou);
            $entityManager->flush();

            return $this->redirectToRoute('main');
        }

        return $this->render('contactez_nous/new.html.twig', [
            'contactez_nou' => $contactezNou,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contactez_nous_show", methods={"GET"})
     */
    public function show(ContactezNous $contactezNou): Response
    {
        return $this->render('contactez_nous/show.html.twig', [
            'contactez_nou' => $contactezNou,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="contactez_nous_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ContactezNous $contactezNou): Response
    {
        $form = $this->createForm(ContactezNousType::class, $contactezNou);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contactez_nous_index');
        }

        return $this->render('contactez_nous/edit.html.twig', [
            'contactez_nou' => $contactezNou,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="contactez_nous_delete", methods={"POST"})
     */
    public function delete(Request $request, ContactezNous $contactezNou): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contactezNou->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contactezNou);
            $entityManager->flush();
        }

        return $this->redirectToRoute('contactez_nous_index');
    }
}
