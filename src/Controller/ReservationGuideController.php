<?php

namespace App\Controller;

use App\Entity\GuideTouristique;
use App\Entity\ReservationGuide;
use App\Entity\Utilisateur;
use App\Form\ReservationGuide1Type;
use App\Repository\UtilisateurRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/reservation/guide")
 */
class ReservationGuideController extends AbstractController
{
    /**
     * @Route("/", name="reservation_guide_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {

        $reservationGuides = $this->getDoctrine()
            ->getRepository(ReservationGuide::class)
            ->findAll();
        $articles = $paginator->paginate(
            $reservationGuides, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );
        return $this->render('reservation_guide/index.html.twig', [
            'reservation_guides' => $articles,
        ]);
    }
    /**
     * @Route("/trier", name="reservation_guide_trier", methods={"GET","POST"})
     */
    public function trier(Request $request, PaginatorInterface $paginator): Response
    {

        $reservationGuides = $this->getDoctrine()->getRepository(ReservationGuide::class)->findAll();
        if(isset($_POST['choix']))
        if ($_POST['choix']=="dateDebut")
            $reservationGuides = $this->getDoctrine()->getRepository(ReservationGuide::class)->findBy(array(),array('dateDebut'=>'ASC'));
        elseif ($_POST['choix']=="dateFin")
            $reservationGuides = $this->getDoctrine()->getRepository(ReservationGuide::class)->findBy(array(),array('dateFin'=>'ASC'));

        $articles = $paginator->paginate(
            $reservationGuides, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );

        return $this->render('reservation_guide/index.html.twig', [
            'reservation_guides' => $articles,
        ]);
    }

    /**
     * @Route("/new/{id}", name="reservation_guide_new", methods={"GET","POST"})
     */
    public function new(Request $request,Utilisateur $guide, \Swift_Mailer $mailer, UserInterface $user,UtilisateurRepository $ur): Response
    {
        $reservationGuide = new ReservationGuide();

        $userr = new Utilisateur();
        $userr = $ur->find($user);
        $form = $this->createForm(ReservationGuide1Type::class, $reservationGuide);
        $form->handleRequest($request);
        $Guides = $this->getDoctrine()
            ->getRepository(Utilisateur::class)
            ->find('1');
        if ($form->isSubmitted() && $form->isValid() ) {
            if ($form->get('dateDebut')->getData() < $form->get('dateFin')->getData())
            {
                $entityManager = $this->getDoctrine()->getManager();
                $reservationGuide->setUser($userr->getId());
                $reservationGuide->setGuideTouristique($request->get('id'));

                $entityManager->persist($reservationGuide);
                $entityManager->flush();

                $message = (new \Swift_Message('Hello Email'))
                    ->setFrom('akoayvannajulia@gmail.com')
                    ->setTo('gabrieltiodoung61@gmail.com')
                    ->setBody('Bonjour M/Mme/Mlle gabrieltiodoung6161@gmail.com 
                    une reservation de Guide à été faite à 
                    votre nom
                    par M/Mme/Mlle akoayvannajulia@gmail.com',
                        'text/html'
                    );
                $mailer->send($message);
                $this->addFlash('message', 'Ajout effectué');

                return $this->redirectToRoute('guide_index');
            }
            $this->addFlash('warning', 'Attention Datedebut superieur ou egale à dateFin!');

        }

        return $this->render('reservation_guide/new.html.twig', [
            'reservation_guide' => $reservationGuide,
            'guides' => $Guides,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_guide_show", methods={"GET"})
     */
    public function show(ReservationGuide $reservationGuide): Response
    {
        return $this->render('reservation_guide/show.html.twig', [
            'reservation_guide' => $reservationGuide,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservation_guide_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ReservationGuide $reservationGuide): Response
    {
        $form = $this->createForm(ReservationGuide1Type::class, $reservationGuide);
        $form->handleRequest($request);

        $Guides = $this->getDoctrine()
            ->getRepository(Utilisateur::class)
            ->findAll();
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_guide_index');
        }

        return $this->render('reservation_guide/edit.html.twig', [
            'reservation_guide' => $reservationGuide,
            'guides' => $Guides,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_guide_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ReservationGuide $reservationGuide): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationGuide->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationGuide);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_guide_index');
    }
}
