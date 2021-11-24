<?php

namespace App\Controller;

use App\Entity\AvisGuide;
use App\Entity\Guide;
use App\Entity\LikeDislike;
use App\Entity\Notif;
use App\Entity\Utilisateur;
use App\Form\AvisGuideType;
use App\Form\GuideType;
use App\Repository\DisponibiliteRepository;
use App\Repository\GuideRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/guide")
 */
class GuideController extends AbstractController
{
    /**
     * @Route("/", name="guide_index", methods={"GET"})
     */
    public function index(UtilisateurRepository $userRepository): Response
    {
        $guides = array();
        $users = $userRepository->findAll();
        foreach ($users as $user){

            if(in_array('ROLE_GUIDE', $user->getRoles())){
                array_push($guides,$user );
            }

        }
        return $this->render('guide/index.html.twig', [
            'guides' => $guides,
        ]);
    }

    /**
     * @Route("/new", name="guide_new", methods={"GET","POST"})
     */
    public function new(Request $request,UserInterface $user): Response
    {
        $userH = new Utilisateur();
        $guide = new Guide();
        $userId = $user->getUsername();
        $userH = $user->setEmail($userId);


        $guide->setIdUser($userH);
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        $notif = new Notif();
        $notif->setTitre("Demande de guide");
        $notif->setSeen(false);
        $notif->setMessage('Nouvelle demande de guide');


        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $cinFront = $form->get('imgCinFront')->getData();
            $cinBack = $form->get('imgCinBack')->getData();
            $cv = $form->get('cvFile')->getData();
            $photo = $form->get('verifPhoto')->getData();

            $cinFrontName = md5(uniqid()).'.'.$cinFront->guessExtension();
            $cinBackName = md5(uniqid()).'.'.$cinBack->guessExtension();
            $cvName = md5(uniqid()).'.'.$cv->guessExtension();
            $photoName = md5(uniqid()).'.'.$photo->guessExtension();

            $cinFront->move(
                $this->getParameter('images_directory'),
                $cinFrontName
            );
            $cinBack->move(
                $this->getParameter('images_directory'),
                $cinBackName
            );
            $cv->move(
                $this->getParameter('images_directory'),
                $cvName
            );
            $photo->move(
                $this->getParameter('images_directory'),
                $photoName
            );


            $guide->setCvFile($cvName);
            $guide->setImgCinBack($cinBackName);
            $guide->setImgCinFront($cinFrontName);
            $guide->setVerifPhoto($photoName);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($guide);
            $entityManager->persist($notif);
            $entityManager->flush();

            return $this->redirectToRoute('main');
        }

        return $this->render('guide/new.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="guide_show", methods={"GET","POST"})
     */
    public function show( Request $request,Utilisateur $guide , UtilisateurRepository $guideRepository , UtilisateurRepository $ur, UserInterface $u, DisponibiliteRepository $disp): Response
    {
        $avisGuide = new AvisGuide();
        $em = $this->getDoctrine()->getManager();
        $em1 = $em->getRepository(AvisGuide::class) ;
        $avisN = $em1->createQueryBuilder('a')
            ->select()
            ->getQuery()
            ->getResult() ;
        $form = $this->createForm(AvisGuideType::class, $avisGuide);
        $form->handleRequest($request);
        $iduser = 1 ;
        $idguid = 1 ;

        $guid = new Guide() ;

        $guid =  $guideRepository->find( $idguid) ;


        $v = 1 ;
        $s = 0 ;
        $v2 = $guide->getId() ;//id_guide
        $repolikes = $em->getRepository(LikeDislike::class);
        $like = $repolikes->createQueryBuilder('a')
            ->select('count(a.id)')
            ->andWhere('a.aime = :val')
            ->setParameter('val', $v)
            ->andWhere('a.guide= :val2')
            ->setParameter('val2', $v2)
            ->getQuery()
            ->getSingleScalarResult();

        $dislike = $repolikes->createQueryBuilder('b')
            ->select('count(b.id)')
            ->andWhere('b.aime = :val')
            ->setParameter('val', $s)
            ->andWhere('b.guide= :val2')
            ->setParameter('val2', $v2)
            ->getQuery()
            ->getSingleScalarResult();


        $disponi = $disp->findBy(array('utilisateur'=> $guid));

        if ($form->isSubmitted() && $form->isValid()) {
            $avisGuide->setIdGuide($guid);
            $avisGuide->setIdUtilisateur($u);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($avisGuide);
            $entityManager->flush();

            return $this->redirectToRoute('guide_index');
        }
        return $this->render('guide/show1.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
            'avisN'=> $avisN ,
            'likes'=> $like ,
            'dislikes'=> $dislike ,
            'disp' => $disponi
        ]);
    }

    /**
     * @Route("/{id}/edit", name="guide_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Guide $guide): Response
    {
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('guide_index');
        }

        return $this->render('guide/edit.html.twig', [
            'guide' => $guide,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="guide_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Guide $guide): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guide->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($guide);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dashboard_guide');
    }


}
