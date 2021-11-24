<?php

namespace App\Controller;

use App\Entity\Disponibilite;
use App\Entity\ReservationGuide;
use App\Entity\Utilisateur;
use App\Form\DisponibiliteType;
use App\Repository\DisponibiliteRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/disponibilite")
 */
class DisponibiliteController extends AbstractController
{
    /**
     * @Route("/new", name="disponibilite_index", methods={"GET"})
     */
    public function index(DisponibiliteRepository $disponibiliteRepository): Response
    {
        return $this->render('disponibilite/index.html.twig', [
            'disponibilites' => $disponibiliteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/", name="disponibilite_new", methods={"GET","POST"})
     */
    public function new(Request $request, DisponibiliteRepository $disponibiliteRepository, PaginatorInterface $paginator): Response
    {
        $reservationGuides = $this->getDoctrine()
            ->getRepository(ReservationGuide::class)
            ->findAll();
        $articles = $paginator->paginate(
            $reservationGuides, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $disponibilite = new Disponibilite();
        $form = $this->createForm(DisponibiliteType::class, $disponibilite);
        $form->handleRequest($request);
        $currentUser = new Utilisateur();
        $currentUser->setEmail($user->getUsername()) ;
        if ($form->isSubmitted() && $form->isValid()) {
            $disponibilite->setUtilisateur($user);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($disponibilite);
            $entityManager->flush();

            return $this->redirectToRoute('disponibilite_index');
        }

        return $this->render('disponibilite/new.html.twig', [
            'disponibilite' => $disponibilite,
            'form' => $form->createView(),
            'disponibilites' => $disponibiliteRepository->findBy(
                ['utilisateur' => $user]
            ),
            'reservation_guides' => $articles,
        ]);
    }

    /**
     * @Route("/{id}", name="disponibilite_show", methods={"GET"})
     */
    public function show(Disponibilite $disponibilite): Response
    {
        return $this->render('disponibilite/show.html.twig', [
            'disponibilite' => $disponibilite,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="disponibilite_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Disponibilite $disponibilite): Response
    {
        $form = $this->createForm(DisponibiliteType::class, $disponibilite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('disponibilite_index');
        }

        return $this->render('disponibilite/edit.html.twig', [
            'disponibilite' => $disponibilite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="disponibilite_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Disponibilite $disponibilite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$disponibilite->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($disponibilite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('disponibilite_index');
    }
}
