<?php

namespace App\Controller;

use App\Entity\TPmaison;
use App\Form\TPmaisonType;
use App\Repository\TPmaisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tpmaison")
 */
class TPmaisonController extends AbstractController
{
    /**
     * @Route("/", name="t_pmaison_index", methods={"GET","POST"})
     */
    public function index(TPmaisonRepository $tPmaisonRepository,Request $request): Response
    {   $tPmaison = new TPmaison();
        $form = $this->createForm(TPmaisonType::class, $tPmaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tPmaison);
            $entityManager->flush();

            return $this->redirectToRoute('t_pmaison_index');
        }
        return $this->render('t_pmaison/index.html.twig', [
            't_pmaisons' => $tPmaisonRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new", name="t_pmaison_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tPmaison = new TPmaison();
        $form = $this->createForm(TPmaisonType::class, $tPmaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tPmaison);
            $entityManager->flush();

            return $this->redirectToRoute('t_pmaison_index');
        }

        return $this->render('t_pmaison/new.html.twig', [
            't_pmaison' => $tPmaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="t_pmaison_show", methods={"GET"})
     */
    public function show(TPmaison $tPmaison): Response
    {
        return $this->render('t_pmaison/show.html.twig', [
            't_pmaison' => $tPmaison,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="t_pmaison_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TPmaison $tPmaison): Response
    {
        $form = $this->createForm(TPmaisonType::class, $tPmaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('t_pmaison_index');
        }

        return $this->render('t_pmaison/edit.html.twig', [
            't_pmaison' => $tPmaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="t_pmaison_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TPmaison $tPmaison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tPmaison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tPmaison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('t_pmaison_index');
    }
}
