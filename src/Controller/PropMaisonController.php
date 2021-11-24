<?php

namespace App\Controller;

use App\Entity\PropMaison;
use App\Entity\Notif;
use App\Entity\Utilisateur;
use App\Form\PropMaisonType;
use App\Repository\PropMaisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/prop/maison")
 */
class PropMaisonController extends AbstractController
{
    /**
     * @Route("/", name="prop_maison_index", methods={"GET"})
     */
    public function index(PropMaisonRepository $propMaisonRepository): Response
    {
        return $this->render('prop_maison/index.html.twig', [
            'prop_maisons' => $propMaisonRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="prop_maison_new", methods={"GET","POST"})
     */
    public function new(Request $request,UserInterface $user): Response
    {

        $userH = new Utilisateur();
        $prop = new PropMaison();
        $userId = $user->getUsername();
        $userH = $user->setEmail($userId);


        $prop->setIdUser($userH);
        $form = $this->createForm(PropMaisonType::class, $prop);
        $form->handleRequest($request);

        $notif = new Notif();
        $notif->setTitre("Demande de prop");
        $notif->setSeen(false);
        $notif->setMessage('Nouvelle demande de prop');


        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $cinFront = $form->get('imgCinFront')->getData();
            $cinBack = $form->get('imgCinBack')->getData();

            $photo = $form->get('verifPhoto')->getData();

            $cinFrontName = md5(uniqid()).'.'.$cinFront->guessExtension();
            $cinBackName = md5(uniqid()).'.'.$cinBack->guessExtension();

            $photoName = md5(uniqid()).'.'.$photo->guessExtension();

            $cinFront->move(
                $this->getParameter('images_directory'),
                $cinFrontName
            );
            $cinBack->move(
                $this->getParameter('images_directory'),
                $cinBackName
            );

            $photo->move(
                $this->getParameter('images_directory'),
                $photoName
            );



            $prop->setImgCinBack($cinBackName);
            $prop->setImgCinFront($cinFrontName);
            $prop->setVerifPhoto($photoName);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($prop);
            $entityManager->persist($notif);
            $entityManager->flush();

            return $this->redirectToRoute('main');
        }

        return $this->render('prop_maison/new.html.twig', [
            'prop' => $prop,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="prop_maison_show", methods={"GET"})
     */
    public function show(PropMaison $propMaison): Response
    {
        return $this->render('prop_maison/show.html.twig', [
            'prop_maison' => $propMaison,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="prop_maison_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PropMaison $propMaison): Response
    {
        $form = $this->createForm(PropMaisonType::class, $propMaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('prop_maison_index');
        }

        return $this->render('prop_maison/edit.html.twig', [
            'prop_maison' => $propMaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="prop_maison_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PropMaison $propMaison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$propMaison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($propMaison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('prop_maison_index');
    }
}
