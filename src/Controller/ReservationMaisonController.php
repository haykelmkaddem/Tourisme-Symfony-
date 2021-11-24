<?php

namespace App\Controller;

use App\Entity\Maisonalouer;
use App\Entity\Proprietaire;
use App\Entity\ReservationMaison;
use App\Form\ReservationMaison1Type;
use App\Repository\ReservationMaisonRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservation/maison")
 */
class ReservationMaisonController extends AbstractController
{
    /**
     * @Route("/", name="reservation_maison_index", methods={"GET"})
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {

        $reservationMaisons = $this->getDoctrine()
            ->getRepository(ReservationMaison::class)
            ->findAll();
        $articles = $paginator->paginate(
            $reservationMaisons, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );

        return $this->render('reservation_maison/index.html.twig', [
            'reservation_maisons' => $articles,
        ]);
    }
    /**
     * @Route("/trier", name="reservation_maison_trier", methods={"GET","POST"})
     */
    public function trier(Request $request, PaginatorInterface $paginator): Response
    {
        $reservationMaisons = $this->getDoctrine()->getRepository(ReservationMaison::class)->findAll();
        if(isset($_POST['choix']))
        if ($_POST['choix']=="dateDebut")
        $reservationMaisons = $this->getDoctrine()->getRepository(ReservationMaison::class)->findBy(array(),array('dateDebut'=>'ASC'));
elseif ($_POST['choix']=="dateFin")
    $reservationMaisons = $this->getDoctrine()->getRepository(ReservationMaison::class)->findBy(array(),array('dateFin'=>'ASC'));

        $articles = $paginator->paginate(
            $reservationMaisons, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );

        return $this->render('reservation_maison/index.html.twig', [
            'reservation_maisons' => $articles,
        ]);
    }

    /**
     * @Route("/new", name="reservation_maison_new", methods={"GET","POST"})
     */
    public function new(Request $request, \Swift_Mailer $mailer): Response
    {
        $reservationMaison = new ReservationMaison();
        $form = $this->createForm(ReservationMaison1Type::class, $reservationMaison);
        $form->handleRequest($request);

        $Maisonss = $this->getDoctrine()
            ->getRepository(Maisonalouer::class)
            ->findAll();
        $Proprietaires = $this->getDoctrine()
            ->getRepository(Proprietaire::class)
            ->findAll();
        if ($form->isSubmitted() && $form->isValid()) {
            {
                $entityManager = $this->getDoctrine()->getManager();
                $reservationMaison->setUser(1);
                $reservationMaison->setMaisonalouer($_POST['maison']);
                $reservationMaison->setProprietaire($_POST['proprietaire']);
                $entityManager->persist($reservationMaison);
                $entityManager->flush();

                $message = (new \Swift_Message('Hello Email'))
                    ->setFrom('akoayvannajulia@gmail.com')
                    ->setTo('akngjuyv@gmail.com')
                    ->setBody('Bonjour M/Mme/Mlle gabrieltiodoung6161@gmail.com 
                    une reservation de Guide à été faite à 
                    votre nom
                    par M/Mme/Mlle akoayvannajulia@gmail.com',
                        'text/html'
                    );
                $mailer->send($message);
                $this->addFlash('message', 'Ajout effectué');

                return $this->redirectToRoute('reservation_maison_index');
            }
            $this->addFlash('warning', 'Attention Datedebut superieur ou egale à dateFin!');
        }

        return $this->render('reservation_maison/new.html.twig', [
            'reservation_maison' => $reservationMaison,
            'maisonss' => $Maisonss,
            'proprietaires' => $Proprietaires,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_maison_show", methods={"GET"})
     */
    public function show(ReservationMaison $reservationMaison): Response
    {
        return $this->render('reservation_maison/show.html.twig', [
            'reservation_maison' => $reservationMaison,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reservation_maison_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ReservationMaison $reservationMaison): Response
    {
        $form = $this->createForm(ReservationMaison1Type::class, $reservationMaison);
        $form->handleRequest($request);

        $Maisonss = $this->getDoctrine()
            ->getRepository(Maisonalouer::class)
            ->findAll();
        $Proprietaires = $this->getDoctrine()
            ->getRepository(Proprietaire::class)
            ->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_maison_index');
        }

        return $this->render('reservation_maison/edit.html.twig', [
            'reservation_maison' => $reservationMaison,
            'maisonss' => $Maisonss,
            'proprietaires' => $Proprietaires,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reservation_maison_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ReservationMaison $reservationMaison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationMaison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservationMaison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservation_maison_index');
    }
}
