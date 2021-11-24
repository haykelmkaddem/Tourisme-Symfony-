<?php

namespace App\Controller;

use App\Entity\EvenApprouve;
use App\Entity\Maison;
use App\Entity\Evenement;
use App\Entity\Guide;
use App\Entity\LikeDislike;
use App\Entity\Utilisateur;
use App\Form\LikeDislikeType;
use App\Repository\LikeDislikeRepository;
use phpDocumentor\Reflection\DocBlock\Description;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/like/dislike")
 */
class LikeDislikeController extends AbstractController
{
    /**
     * @Route("/", name="like_dislike_index", methods={"GET"})
     */
    public function index(LikeDislikeRepository $likeDislikeRepository): Response
    {
        return $this->render('like_dislike/index.html.twig', [
            'like_dislikes' => $likeDislikeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/dislikee/{id}", name="dislike_new_e", methods={"GET"})
     */
    public function newdislikee(Request $request, EvenApprouve $evenement, UserInterface $user): Response
    {
        $likeDislike = new LikeDislike();


        $likeDislike->setAime(false);
        $likeDislike->setEvenApprouve( $evenement);
        $likeDislike->setUserId($user);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($likeDislike);
        $entityManager->flush();

        return $this->redirectToRoute('like_dislike_index');
    }

    /**
     * @Route("/disliked/{id}", name="dislike_new_d", methods={"GET"})
     */
    public function newdisliked(Request $request, Maison $maison, UserInterface $user): Response
    {
        $likeDislike = new LikeDislike();


        $likeDislike->setAime(false);
        $likeDislike->setMaisonId( $maison);
        $likeDislike->setUserId($user);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($likeDislike);
        $entityManager->flush();

        return $this->redirectToRoute('like_dislike_index');



    }

    /**
     * @Route("/dislikeg/{id}", name="dislike_new_g", methods={"GET"})
     */
    public function newdislikeg(Request $request,Utilisateur $guide, UserInterface $user): Response
    {
        $likeDislike = new LikeDislike();

        $likeDislike->setAime(false);
        $likeDislike->setGuide( $guide);
        $likeDislike->setUserId($user);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($likeDislike);
        $entityManager->flush();

        return $this->redirectToRoute('guide_index');



    }

    /**
     * @Route("/likee/{id}", name="like_new_e", methods={"GET"})
     */
    public function newlikee(Request $request, EvenApprouve $evenement ,UserInterface $user): Response
    {
        $likeDislike = new LikeDislike();


        $likeDislike->setAime(true);
        $likeDislike->setEvenApprouve( $evenement);
        $likeDislike->setUserId($user);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($likeDislike);
        $entityManager->flush();

        return $this->redirectToRoute('like_dislike_index');
    }

    /**
     * @Route("/liked/{id}", name="like_new_d", methods={"GET"})
     */
    public function newliked(Request $request, Maison $maison, UserInterface $user): Response
    {
        $likeDislike = new LikeDislike();


        $likeDislike->setAime(true);
        $likeDislike->setMaisonId( $maison);
        $likeDislike->setUserId($user);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($likeDislike);
        $entityManager->flush();

        return $this->redirectToRoute('like_dislike_index');



    }

    /**
     * @Route("/likeg/{id}", name="like_new_g", methods={"GET"})
     */
    public function newlikeg(Request $request, Utilisateur $guide, UserInterface $user): Response
    {
        $likeDislike = new LikeDislike();


        $likeDislike->setAime(true);
        $likeDislike->setGuide( $guide);
        $likeDislike->setUserId($user);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($likeDislike);
        $entityManager->flush();

        return $this->redirectToRoute('guide_index');



    }

    /**
     * @Route("/{id}", name="like_dislike_show", methods={"GET"})
     */
    public function show(LikeDislike $likeDislike): Response
    {
        return $this->render('like_dislike/show.html.twig', [
            'like_dislike' => $likeDislike,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="like_dislike_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LikeDislike $likeDislike): Response
    {
        $form = $this->createForm(LikeDislikeType::class, $likeDislike);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('like_dislike_index');
        }

        return $this->render('like_dislike/edit.html.twig', [
            'like_dislike' => $likeDislike,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="like_dislike_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LikeDislike $likeDislike): Response
    {
        if ($this->isCsrfTokenValid('delete'.$likeDislike->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($likeDislike);
            $entityManager->flush();
        }

        return $this->redirectToRoute('like_dislike_index');
    }
}
