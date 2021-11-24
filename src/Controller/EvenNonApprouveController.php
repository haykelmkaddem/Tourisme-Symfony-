<?php

namespace App\Controller;

use App\Entity\Artiste;
use App\Entity\EvenApprouve;
use App\Entity\EvenNonApprouve;
use App\Entity\EvenPopularite;
use App\Entity\LieuEven;
use App\Form\EvenNonApprouveType;
use App\Repository\EvenApprouveRepository;
use App\Repository\EvenNonApprouveRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/even/non/approuve")
 */
class EvenNonApprouveController extends AbstractController
{

    /**
     * @Route("/annuler/{id}", name="even_non_approuve_annuler", methods={"GET","POST"})
     */
    public function annuler($id, \Swift_Mailer $mailer,UtilisateurRepository $urepository, EvenNonApprouveRepository $ena): Response
    {

            $entityManager = $this->getDoctrine()->getManager();
            $EvenNonApp = $entityManager->getRepository(EvenNonApprouve::class)->find($id);
            $usermail = $urepository->find($EvenNonApp->getIdClient())->getEmail();

            $entityManager->remove($EvenNonApp);
            $entityManager->flush();

        $message = (new \Swift_Message('Evénement non approuvé'))

            ->setFrom('ramzi.benghorbel@gmail.com')

            ->setTo($usermail)

            ->setBody($this->renderView('Emails/refuseEven.html.twig') , 'text/html' );

        $mailer->send($message);
        $this->addFlash('message','Le mail a été rejeté');



        return $this->redirectToRoute('even_non_approuve_index');
    }


    /**
     * @Route("/approuver/{id}", name="even_non_approuve_approuver", methods={"GET"})
     */
    public function approuver(EvenNonApprouveRepository $evenNonApprouveRepository,UtilisateurRepository $urepository, EvenApprouveRepository $evenApprouveRepository ,$id , \Swift_Mailer $mailer)
    {
       $entityManager = $this->getDoctrine()->getManager();
       $evenNonApp = $evenNonApprouveRepository->find($id);




       $Artiste =  $evenNonApp->getArtiste();

       $evenApp = new EvenApprouve();
       foreach ($Artiste as $item)
       {
           $evenApp->addArtiste($item);
       }


        $evenApp->setTitreEven($evenNonApp->getTitreEven());
        $evenApp->setImageFilename($evenNonApp->getImageFilename());
        $evenApp->setDescriptionEven($evenNonApp->getDescriptionEven());
        $evenApp->setCategorieEven($evenNonApp->getCategorieEven());
        $evenApp->setLieuEven($evenNonApp->getLieuEven());
        $evenApp->setDateDebutEven($evenNonApp->getDateDebutEven());
        $evenApp->setDateFinEven($evenNonApp->getDateFinEven());
        $evenApp->setHeureDebutEven($evenNonApp->getHeureDebutEven());
        $evenApp->setHeureFinEven($evenNonApp->getHeureFinEven());
        $evenApp->setDateAjout(new \DateTime());

        $entityManager->persist($evenApp);
        $entityManager->flush();
        $idEven = $evenApp->getId();

        $evenPopularite = new EvenPopularite();

        $evenPopularite->setParticipants(0);
        $evenPopularite->setPeutEtre(0);
        $evenPopularite->setNo(0);
        $evenPopularite->setIdEven($idEven);

        $entityManager->persist($evenPopularite);


        $entityManager->flush();

        $entityManager->remove($evenNonApp);
        $entityManager->flush();
        $usermail = $urepository->find($evenNonApp->getIdClient())->getEmail();
        $message = (new \Swift_Message('Evénement approuvé'))

        ->setFrom('ramzi.benghorbel@gmail.com')

        ->setTo($usermail)

            ->setBody($this->renderView('Emails/approuveEven.html.twig') , 'text/html' );

        $mailer->send($message);
        $this->addFlash('message','Le mail a été envoyé');

        return $this->render('even_approuve/index.html.twig', [
            'even_approuves' => $evenApprouveRepository->findAll(),
        ]);

    }


    /**
     * @Route("/", name="even_non_approuve_index", methods={"GET"})
     */
    public function index(EvenNonApprouveRepository $evenNonApprouveRepository): Response
    {
        return $this->render('even_non_approuve/index.html.twig', [
            'even_non_approuves' => $evenNonApprouveRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="even_non_approuve_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserInterface $user, UtilisateurRepository $ur): Response
    {
        $userr = $ur->find($user);
        $evenNonApprouve = new EvenNonApprouve();
        $form = $this->createForm(EvenNonApprouveType::class, $evenNonApprouve);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenNonApprouve->setDateAjout(new \DateTime());
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
                $evenNonApprouve->setImageFilename($newFilename);
            }

            $evenNonApprouve->setIdClient($userr->getId());
            $entityManager->persist($evenNonApprouve);
            $entityManager->flush();


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


        return $this->render('even_non_approuve/new.html.twig', [
            'even_non_approuve' => $evenNonApprouve,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="even_non_approuve_show", methods={"GET"})
     */
    public function show(EvenNonApprouve $evenNonApprouve): Response
    {
        return $this->render('even_non_approuve/show.html.twig', [
            'even_non_approuve' => $evenNonApprouve,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="even_non_approuve_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, EvenNonApprouve $evenNonApprouve): Response
    {
        $form = $this->createForm(EvenNonApprouveType::class, $evenNonApprouve);
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
                $evenNonApprouve->setImageFilename($newFilename);
            }


            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('even_non_approuve_index');
        }

        return $this->render('even_non_approuve/edit.html.twig', [
            'even_non_approuve' => $evenNonApprouve,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="even_non_approuve_delete", methods={"POST"})
     */
    public function delete(Request $request, EvenNonApprouve $evenNonApprouve): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenNonApprouve->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($evenNonApprouve);
            $entityManager->flush();
        }

        return $this->redirectToRoute('even_non_approuve_index');
    }
}
