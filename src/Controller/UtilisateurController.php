<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\AproposFormType;
use App\Form\EditProfolePicType;
use App\Form\EditProfoleType;
use App\Form\FacebookFormType;
use App\Form\InstagramFormType;
use App\Form\LinkedinFormType;
use App\Form\RegistrationFormType;
use App\Form\Utilisateur2Type;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/utilisateur")
 */
class UtilisateurController extends AbstractController
{
    /**
     * @Route("/", name="utilisateur_index", methods={"GET"})
     */
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="utilisateur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('utilisateur_index');
        }

        return $this->render('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="utilisateur_show", methods={"GET","POST"})
     */
    public function show(Request $request,Utilisateur $utilisateur): Response
    {
        $formFacebook = $this->createForm(FacebookFormType::class, $utilisateur);
        $formFacebook->handleRequest($request);
        $formLinkedin = $this->createForm(LinkedinFormType::class, $utilisateur);
        $formLinkedin->handleRequest($request);
        $formInstagram = $this->createForm(InstagramFormType::class, $utilisateur);
        $formInstagram->handleRequest($request);
        $formApropos = $this->createForm(AproposFormType::class, $utilisateur);
        $formApropos->handleRequest($request);
        if ($formFacebook->isSubmitted() && $formFacebook->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->render('utilisateur/show.html.twig', [
                'utilisateur' => $utilisateur,'formfacebook' => $formFacebook->createView(),
                'forminstagram' => $formInstagram->createView(),
                'formlinkedin' => $formLinkedin->createView(),
                'formapropos' => $formApropos->createView(),
            ]);
        }

        if ($formLinkedin->isSubmitted() && $formLinkedin->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->render('utilisateur/show.html.twig', [
                'utilisateur' => $utilisateur,'formfacebook' => $formFacebook->createView(),
                'forminstagram' => $formInstagram->createView(),
                'formlinkedin' => $formLinkedin->createView(),
                'formapropos' => $formApropos->createView(),
            ]);
        }

        if ($formInstagram->isSubmitted() && $formInstagram->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->render('utilisateur/show.html.twig', [
                'utilisateur' => $utilisateur,'formfacebook' => $formFacebook->createView(),
                'forminstagram' => $formInstagram->createView(),
                'formlinkedin' => $formLinkedin->createView(),
                'formapropos' => $formApropos->createView(),
            ]);
        }


        if ($formApropos->isSubmitted() && $formApropos->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->render('utilisateur/show.html.twig', [
                'utilisateur' => $utilisateur,'formfacebook' => $formFacebook->createView(),
                'forminstagram' => $formInstagram->createView(),
                'formlinkedin' => $formLinkedin->createView(),
                'formapropos' => $formApropos->createView(),
            ]);
        }
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
            'formfacebook' => $formFacebook->createView(),
            'forminstagram' => $formInstagram->createView(),
            'formlinkedin' => $formLinkedin->createView(),
            'formapropos' => $formApropos->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="utilisateur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Utilisateur $utilisateur): Response
    {
        $form = $this->createForm(EditProfoleType::class, $utilisateur);
        $form->handleRequest($request);
        $formFacebook = $this->createForm(FacebookFormType::class, $utilisateur);
        $formFacebook->handleRequest($request);
        $formLinkedin = $this->createForm(LinkedinFormType::class, $utilisateur);
        $formLinkedin->handleRequest($request);
        $formInstagram = $this->createForm(InstagramFormType::class, $utilisateur);
        $formInstagram->handleRequest($request);
        $formApropos = $this->createForm(AproposFormType::class, $utilisateur);
        $formApropos->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->render('utilisateur/show.html.twig', [
                'utilisateur' => $utilisateur,'formfacebook' => $formFacebook->createView(),
                'forminstagram' => $formInstagram->createView(),
                'formlinkedin' => $formLinkedin->createView(),
                'formapropos' => $formApropos->createView(),
            ]);
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/editPhoto", name="utilisateur_edit_photo", methods={"GET","POST"})
     */
    public function editPhoto(Request $request, Utilisateur $utilisateur): Response
    {
        $form = $this->createForm(EditProfolePicType::class, $utilisateur);
        $form->handleRequest($request);
        $formFacebook = $this->createForm(FacebookFormType::class, $utilisateur);
        $formFacebook->handleRequest($request);
        $formLinkedin = $this->createForm(LinkedinFormType::class, $utilisateur);
        $formLinkedin->handleRequest($request);
        $formInstagram = $this->createForm(InstagramFormType::class, $utilisateur);
        $formInstagram->handleRequest($request);
        $formApropos = $this->createForm(AproposFormType::class, $utilisateur);
        $formApropos->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photo = $form->get('image')->getData();
            $photoName = md5(uniqid()).'.'.$photo->guessExtension();
            $photo->move(
                $this->getParameter('images_directory'),
                $photoName
            );
            $utilisateur->setImage($photoName);
            $this->getDoctrine()->getManager()->flush();

            return $this->render('utilisateur/show.html.twig', [
                'utilisateur' => $utilisateur,'formfacebook' => $formFacebook->createView(),
                'forminstagram' => $formInstagram->createView(),
                'formlinkedin' => $formLinkedin->createView(),
                'formapropos' => $formApropos->createView(),
            ]);
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="utilisateur_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Utilisateur $utilisateur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('main');
    }
}
