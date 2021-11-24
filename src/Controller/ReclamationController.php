<?php

namespace App\Controller;

use App\Entity\BadWords;
use App\Entity\LikeDislike;
use App\Entity\Reclamation;
use App\Form\Reclamation2Type;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reclamation_new", methods={"GET","POST"})
     */
    public function new(Request $request,\Swift_Mailer $mailer): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(Reclamation2Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $words = explode(" ", $reclamation->getDescription());

            $em = $this ->getDoctrine()->getManager() ;
            $repoword = $em->getRepository(BadWords::class);



            $badwords = 0 ;
            $badwordsc = 0 ;
            foreach( $words as  $word ){
                $badwords = $repoword->createQueryBuilder('a')
                    ->select('count(a.id)')
                    ->andWhere('a.word LIKE :val')
                    ->setParameter('val',  '%'.$word.'%')
                    ->getQuery()
                    ->getSingleScalarResult();
                $badwordsc =  $badwordsc +  $badwords ;
            }



if  ($badwordsc < 1  ) {
    $entityManager = $this->getDoctrine()->getManager();
    $entityManager->persist($reclamation);
    $entityManager->flush();
    $rec = $reclamation->getDescription();
    $recl = $reclamation->getIdUtilisateur()->getNom();
    $message = (new \Swift_Message('Hello Email'))
        ->setFrom('mohamedamine.bensamir@esprit.tn')
        ->setTo('syrine.sassi@esprit.tn')
        ->setBody(
            $this->renderView(
            // templates/emails/registration.html.twig
                'email/reclamation.html.twig',
                ['name' => $recl, 'message' => $rec]
            ),
            'text/html'
        );

    $mailer->send($message);
    return $this->redirectToRoute('reclamation_index');
} else {
    return $this->render('reclamation/new.html.twig', [
        'reclamation' => $reclamation,
        'form' => $form->createView(),
        'erreur' => "mot inapproprié" ,
    ]);
}
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reclamation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(Reclamation2Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reclamation $reclamation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_index');
    }
}
