<?php

namespace App\Controller;

use App\Entity\AvisEvenement;
use App\Entity\AvisGuide;
use App\Entity\EvenApprouve;
use App\Entity\EvenPopularite;
use App\Entity\Guide;
use App\Entity\LieuEven;
use App\Entity\LikeDislike;
use App\Entity\Utilisateur;
use App\Form\AvisEvenementType;
use App\Form\AvisGuideType;
use App\Form\EvenApprouveType;
use App\Repository\DisponibiliteRepository;
use App\Repository\EvenApprouveRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/even/approuve")
 */
class EvenApprouveController extends AbstractController
{

    /**
     * @Route("/meilleurPlan", name="meilleurPlan", methods={"GET"})
     */
    public function meilleurPlan()
    {


        $em = $this->getDoctrine()->getManager();


        $array = $em->getRepository(EvenPopularite::class)->findOneBy(array(), array('participants' => 'DESC'));
        $EvenDetail = $em->getRepository(EvenApprouve::class)->find($array->getIdEven());




        return $this->render('even_approuve/evenAppDetail1.html.twig', array(
            "even_approuve"=>$EvenDetail,
            "even_pop"=>$array,

        ));

    }

    /**
     * @Route("/aEviter", name="aEviter", methods={"GET"})
     */
    public function aEviter()
    {


        $em = $this->getDoctrine()->getManager();


        $array = $em->getRepository(EvenPopularite::class)->findOneBy(array(), array('participants' => 'ASC'));
        $EvenDetail = $em->getRepository(EvenApprouve::class)->find($array->getIdEven());




        return $this->render('even_approuve/evenAppDetail1.html.twig', array(
            "even_approuve"=>$EvenDetail,
            "even_pop"=>$array,

        ));

    }


    /**
     * @Route("/participant/{id}", name="participant", methods={"GET"})
     */
    public function participant($id)
    {


        $em = $this->getDoctrine()->getManager();

        $EvenDetail = $em->getRepository(EvenApprouve::class)->find($id);
        $array = $em->getRepository(EvenPopularite::class)->findOneBy(array('idEven' => $id));
        $nbPart = $array->getParticipants();
        $array->setParticipants($nbPart+1);

        $em->persist($array);
        $em->flush();

        $newPop = $em->getRepository(EvenPopularite::class)->findOneBy(array('idEven' => $id));

        return $this->render('even_approuve/evenAppDetail1.html.twig', array(
            "even_approuve"=>$EvenDetail,
            "even_pop"=>$newPop,

        ));

    }

    /**
     * @Route("/peuEtre/{id}", name="peutEtre", methods={"GET"})
     */
    public function peuEtre($id)
    {


        $em = $this->getDoctrine()->getManager();

        $EvenDetail = $em->getRepository(EvenApprouve::class)->find($id);
        $array = $em->getRepository(EvenPopularite::class)->findOneBy(array('idEven' => $id));
        $nbPart = $array->getPeutEtre();
        $array->setPeutEtre($nbPart+1);

        $em->persist($array);
        $em->flush();

        $newPop = $em->getRepository(EvenPopularite::class)->findOneBy(array('idEven' => $id));

        return $this->render('even_approuve/evenAppDetail1.html.twig', array(
            "even_approuve"=>$EvenDetail,
            "even_pop"=>$newPop,

        ));

    }

    /**
     * @Route("/no/{id}", name="no", methods={"GET"})
     */
    public function no($id)
    {


        $em = $this->getDoctrine()->getManager();

        $EvenDetail = $em->getRepository(EvenApprouve::class)->find($id);
        $array = $em->getRepository(EvenPopularite::class)->findOneBy(array('idEven' => $id));
        $nbPart = $array->getNo();
        $array->setNo($nbPart+1);

        $em->persist($array);
        $em->flush();

        $newPop = $em->getRepository(EvenPopularite::class)->findOneBy(array('idEven' => $id));

        return $this->render('even_approuve/evenAppDetail1.html.twig', array(
            "even_approuve"=>$EvenDetail,
            "even_pop"=>$newPop,

        ));

    }


    /**
     * @Route("/detail/{id}", name="detail", methods={"GET"})
     */
    public function detail($id,Request $request,EvenApprouve $even , UtilisateurRepository $guideRepository , UtilisateurRepository $ur, UserInterface $u, DisponibiliteRepository $disp)
    {
        $avisEvent = new AvisEvenement();
        $em = $this->getDoctrine()->getManager();
        $em1 = $em->getRepository(AvisEvenement::class) ;
        $avisN = $em1->createQueryBuilder('a')
            ->select()
            ->getQuery()
            ->getResult() ;
        $form = $this->createForm(AvisEvenementType::class, $avisEvent);
        $form->handleRequest($request);
        $iduser = 1 ;
        $idguid = 1 ;

        $guid = new Guide() ;

        $guid =  $guideRepository->find( $idguid) ;


        $v = 1 ;
        $s = 0 ;
        $v2 = $even->getId() ;//id_guide
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
            $avisEvent->setIdEvenement($even);
            $avisEvent->setIdUtilisateur($u);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($avisEvent);
            $entityManager->flush();

            return $this->redirectToRoute('even_approuve_index');
        }

        $em = $this->getDoctrine()->getManager();


        $EvenDetail = $em->getRepository(EvenApprouve::class)->find($id);
        $array = $em->getRepository(EvenPopularite::class)->findOneBy(array('idEven' => $id));


        return $this->render('even_approuve/evenAppDetail1.html.twig', array(
            "even_approuve"=>$EvenDetail,
            "even_pop"=>$array,
            'form' => $form->createView(),
            'avisN'=> $avisN ,
            'likes'=> $like ,
            'dislikes'=> $dislike ,
            'disp' => $disponi

        ));

    }


    /**
     * @Route("/searchajaxE", name="ajaxsearchE", methods={"GET"})
     */
    public function searchajax(EvenApprouveRepository $repository,Request $request)
    {
        $repository=$this->getDoctrine()->getRepository(EvenApprouve::class);
        $requestString = $request->get('searchValue');
        $Evens = $repository->findEvenByTitre($requestString);
        return $this->render('even_approuve/ajax.html.twig',[
            "even_approuves"=>$Evens,
        ]);

    }


    /**
     * @Route("/evenLieu/{id}", name="even_approuve_evenLieu", methods={"GET","POST"})
     *
     */

    public function evenLieuAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $EvenLieu = $em->getRepository(EvenApprouve::class)->findBy(array('LieuEven' => $id));
        $lieux = $em->getRepository(LieuEven::class)->findAll();

        return $this->render('even_approuve/evenParLieu.html.twig', array(
            'EvenLieus' => $EvenLieu,
            'lieux' => $lieux,
        ));

    }



    /**
     * @Route("/decroissantHeure", name="even_approuve_decroissantHeure", methods={"GET","POST"})
     */

    public function decroissantHeureAction()
    {

        $em = $this->getDoctrine()->getManager();
        $conn = $em->getConnection();
        $sql = 'SELECT * FROM even_approuve WHERE heure_debut_even ORDER BY heure_debut_even DESC ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll();
        $lieux = $em->getRepository(LieuEven::class)->findAll();

        return $this->render('even_approuve/listeEventsFront.html.twig', array(
            'even_approuves' => $array,
            'lieux' => $lieux,
        ));

    }


    /**
     * @Route("/croissantHeure", name="even_approuve_croissantHeure", methods={"GET","POST"})
     */

    public function croissantHeureAction()
    {

        $em = $this->getDoctrine()->getManager();
        $conn = $em->getConnection();
        $sql = 'SELECT * FROM even_approuve WHERE heure_debut_even ORDER BY heure_debut_even  ASC';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll();
        $lieux = $em->getRepository(LieuEven::class)->findAll();

        return $this->render('even_approuve/listeEventsFront.html.twig', array(
            'even_approuves' => $array,
            'lieux' => $lieux,
        ));

    }


    /**
     * @Route("/decroissant", name="even_approuve_decroissant", methods={"GET","POST"})
     */

    public function decroissant1Action()
    {

        $em = $this->getDoctrine()->getManager();
        $conn = $em->getConnection();
        $sql = 'SELECT * FROM even_approuve WHERE date_debut_even ORDER BY date_debut_even DESC ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll();
        $lieux = $em->getRepository(LieuEven::class)->findAll();

        return $this->render('even_approuve/listeEventsFront.html.twig', array(
            'even_approuves' => $array,
            'lieux' => $lieux,
        ));

    }


    /**
     * @Route("/croissant", name="even_approuve_croissant", methods={"GET","POST"})
     */

    public function croissant1Action()
    {

        $em = $this->getDoctrine()->getManager();
        $conn = $em->getConnection();
        $sql = 'SELECT * FROM even_approuve WHERE date_debut_even ORDER BY date_debut_even  ASC';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll();
        $lieux = $em->getRepository(LieuEven::class)->findAll();

        return $this->render('even_approuve/listeEventsFront.html.twig', array(
            'even_approuves' => $array,
            'lieux' => $lieux,
        ));

    }




    /**
     * @Route("/front", name="even_approuve_indexFront", methods={"GET"})
     */
    public function indexFront()
    {

        $em = $this->getDoctrine()->getManager();
        $conn = $em->getConnection();
        $sql = 'SELECT * FROM even_approuve ORDER BY dateAjout DESC LIMIT 5 ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll();

        $lieux = $em->getRepository(LieuEven::class)->findAll();

        return $this->render('even_approuve/indexFront.html.twig', [
            'even_approuves' => $array,
            'lieux' => $lieux,
        ]);
    }

    /**
     * @Route("/listeEvent", name="even_approuve_listeEvent", methods={"GET"})
     */
    public function listeEvent()
    {

        $em = $this->getDoctrine()->getManager();
        $conn = $em->getConnection();
        $sql = 'SELECT * FROM even_approuve ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $array = $stmt->fetchAll();

        $lieux = $em->getRepository(LieuEven::class)->findAll();

        return $this->render('even_approuve/listeEventsFront.html.twig', [
            'even_approuves' => $array,
            'lieux' => $lieux,
        ]);
    }



    /**
     * @Route("/", name="even_approuve_index", methods={"GET"})
     */
    public function index(EvenApprouveRepository $evenApprouveRepository): Response
    {
        return $this->render('even_approuve/index.html.twig', [
            'even_approuves' => $evenApprouveRepository->findAll(),
        ]);
    }



    /**
     * @Route("/new", name="even_approuve_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $evenApprouve = new EvenApprouve();
        $form = $this->createForm(EvenApprouveType::class, $evenApprouve);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenApprouve->setDateAjout(new \DateTime());
            $entityManager = $this->getDoctrine()->getManager();

            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFilename')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where brochures are stored

                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );


                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $evenApprouve->setImageFilename($newFilename);
            }


            $entityManager->persist($evenApprouve);
            $entityManager->flush();

            $idEven = $evenApprouve->getId();

            $evenPopularite = new EvenPopularite();

            $evenPopularite->setParticipants(0);
            $evenPopularite->setPeutEtre(0);
            $evenPopularite->setNo(0);
            $evenPopularite->setIdEven($idEven);

            $entityManager->persist($evenPopularite);

            $entityManager->flush();

            return $this->redirectToRoute('even_approuve_index');
        }

        return $this->render('even_approuve/new.html.twig', [
            'even_approuve' => $evenApprouve,
            'form' => $form->createView(),
        ]);
    }





    /**
     * @Route("/{id}", name="even_approuve_show", methods={"GET"})
     */
    public function show(EvenApprouve $evenApprouve): Response
    {
        return $this->render('even_approuve/show.html.twig', [
            'even_approuve' => $evenApprouve,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="even_approuve_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, EvenApprouve $evenApprouve): Response
    {
        $form = $this->createForm(EvenApprouveType::class, $evenApprouve);
        $form->handleRequest($request);

        if ($form->isSubmitted() ) {

            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFilename')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where brochures are stored

                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );


                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $evenApprouve->setImageFilename($newFilename);
            }
            $this->getDoctrine()->getManager()->flush();


            return $this->redirectToRoute('even_approuve_index');
        }

        return $this->render('even_approuve/edit.html.twig', [
            'even_approuve' => $evenApprouve,
            'form' => $form->createView(),
        ]);
    }




    /**
     * @Route("/{id}", name="even_approuve_delete", methods={"DELETE"})
     */
    public function delete(Request $request, EvenApprouve $evenApprouve): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenApprouve->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evenApprouve);
            $entityManager->flush();
        }

        return $this->redirectToRoute('even_approuve_index');
    }






}
