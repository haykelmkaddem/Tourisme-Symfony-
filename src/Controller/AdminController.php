<?php

namespace App\Controller;

use App\Entity\Disponibilite;
use App\Entity\Guide;
use App\Entity\LieuMaison;
use App\Entity\Notif;
use App\Entity\PropMaison;
use App\Entity\Utilisateur;
use App\Form\EditRolePropType;
use App\Form\EditRoleType;
use App\Form\EditUserType;
use App\Form\LieuMaisonType;
use App\Form\RegistrationFormType;
use App\Repository\DisponibiliteRepository;
use App\Repository\GuideRepository;
use App\Repository\LieuMaisonRepository;
use App\Repository\NotifRepository;
use App\Repository\PropMaisonRepository;
use App\Repository\UtilisateurRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/dashboard", name="dashboard_")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(NotifRepository $notifRepository, DisponibiliteRepository $dr): Response
    {
        $disp = new Disponibilite();
        $disp = $dr->findAll();
        foreach ($disp as $d){
            $year = date("y",strtotime($d->getDate()->format('y-m-d')));
            $currentYear = date('Y');
            if ($year == $currentYear){
                $month = date("m",strtotime($d->getDate()->format('y-m-d')));
                
            }


        }
        $tunisia = 'Tunisie';
        $em = $this->getDoctrine()->getManager();
        $usersl = $em->getRepository(Utilisateur::class);
        $t1 = $usersl->createQueryBuilder('a')
            ->andWhere('a.pays = :tunisia')
            ->setParameter('tunisia', $tunisia)
            ->select('count(a.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $t3 = $usersl->createQueryBuilder('b')
            ->select('count(b.id)')
            ->getQuery()
            ->getSingleScalarResult();

        $t2 = $t3 - $t1;

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Country', 'Members'],
                ['Tunisia',   (int)  $t1],
                ['Other',    (int)  $t2]
            ]
        );

        $pieChart->getOptions()->setIs3D(true);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20) ;

        //return $this->render('AppBundle::index.html.twig', array('piechart' => $pieChart));

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'piechart' => $pieChart,
            'notifs' => $notifRepository->findBy(array('seen' => false))
        ]);
    }

    /**
     * @Route("/utilisateur", name="utilisateurs", methods={"GET"})
     */
    public function usersList(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('admin/users.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/guide", name="guide", methods={"GET"})
     */
    public function guidesList(GuideRepository $guideRepository): Response
    {
        return $this->render('admin/guides.html.twig', [
            'guides' => $guideRepository->findAll(),
        ]);
    }
    /**
     * @Route("/prop/maison", name="prop", methods={"GET"})
     */
    public function propList(PropMaisonRepository $propRepository): Response
    {
        return $this->render('admin/props.html.twig', [
            'props' => $propRepository->findAll(),
        ]);
    }
    /**
     * @Route("/utilisateur/{id}/affectguide", name="utilisateur_affectguide", methods={"GET","POST"})
     */
    public function editRoleGuide(Request $request, Utilisateur $utilisateur): Response
    {
        $form = $this->createForm(EditRoleType::class, $utilisateur);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dashboard_utilisateurs');
        }

        return $this->render('admin/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/notif/seen/{id}", name="notif_seen", methods={"GET"})
     */
    public function notifseen(Request $request): Response
    {
        $id = $request->query->get('id');
        dump($id);
        $entityManager = $this->getDoctrine()->getManager();
        $notif = $entityManager->getRepository(Notif::class)->find($request);

        if (!$notif) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $notif->setSeen(true);
        $entityManager->flush();


            return $this->redirectToRoute('dashboard_index');

    }

    /**
     * @Route("/utilisateur/{id}/edit", name="utilisateur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Utilisateur $utilisateur): Response
    {
        $form = $this->createForm(EditUserType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dashboard_utilisateurs');
        }

        return $this->render('admin/edituser.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/utilisateur/{id}", name="utilisateur_show", methods={"GET"})
     */
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('admin/showuser.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
    /**
     * @Route("delete/{id}", name="utilisateur_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Utilisateur $utilisateur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($utilisateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dashboard_utilisateurs');
    }


    /**
     * @Route("/demandeguide/{id}", name="guide_show", methods={"GET"})
     */
    public function showGuide(Guide $guide): Response
    {
        return $this->render('admin/showguide.html.twig', [
            'guide' => $guide,
        ]);
    }
    /**
     * @Route("/demandeprop/{id}", name="prop_show", methods={"GET"})
     */
    public function showProp(PropMaison $prop): Response
    {
        return $this->render('admin/showprop.html.twig', [
            'prop' => $prop,
        ]);
    }
    /**
     * @Route("/utilisateur/{id}/affectprop", name="utilisateur_affectprop", methods={"GET","POST"})
     */
    public function editRoleProp(Request $request, Utilisateur $utilisateur): Response
    {
        $form = $this->createForm(EditRolePropType::class, $utilisateur);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dashboard_utilisateurs');
        }

        return $this->render('admin/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/lieux", name="lieu_maison_index", methods={"GET","POST"})
     */
    public function indexlieux(LieuMaisonRepository $lieuMaisonRepository,Request $request): Response
    {   $lieuMaison = new LieuMaison();
        $form = $this->createForm(LieuMaisonType::class, $lieuMaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lieuMaison);
            $entityManager->flush();

            return $this->redirectToRoute('lieu_maison_index');
        }
        return $this->render('lieu_maison/index.html.twig', [
            'lieu_maisons' => $lieuMaisonRepository->findAll(),
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/lieux/new", name="lieu_maison_new", methods={"GET","POST"})
     */
    public function newlieux(Request $request): Response
    {
        $lieuMaison = new LieuMaison();
        $form = $this->createForm(LieuMaisonType::class, $lieuMaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lieuMaison);
            $entityManager->flush();

            return $this->redirectToRoute('lieu_maison_index');
        }

        return $this->render('lieu_maison/new.html.twig', [
            'lieu_maison' => $lieuMaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/lieux/{id}", name="lieu_maison_show", methods={"GET"})
     */
    public function showlieux(LieuMaison $lieuMaison): Response
    {
        return $this->render('lieu_maison/show.html.twig', [
            'lieu_maison' => $lieuMaison,
        ]);
    }

    /**
     * @Route("/lieux/{id}/edit", name="lieu_maison_edit", methods={"GET","POST"})
     */
    public function editlieux(Request $request, LieuMaison $lieuMaison): Response
    {
        $form = $this->createForm(LieuMaisonType::class, $lieuMaison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lieu_maison_index');
        }

        return $this->render('lieu_maison/edit.html.twig', [
            'lieu_maison' => $lieuMaison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/lieux/{id}", name="lieu_maison_delete", methods={"DELETE"})
     */
    public function deletelieux(Request $request, LieuMaison $lieuMaison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lieuMaison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lieuMaison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('lieu_maison_index');
    }



}
