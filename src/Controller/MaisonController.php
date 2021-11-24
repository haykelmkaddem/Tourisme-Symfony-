<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\LieuMaison;
use App\Entity\Maison;
use App\Entity\TPmaison;
use App\Form\MaisonType;
use App\Form\searchType;
use App\Repository\LieuMaisonRepository;
use App\Repository\MaisonRepository;

use Dompdf\Dompdf;
use Dompdf\Options;
use Endroid\QrCode\QrCode;
use Knp\Component\Pager\PaginatorInterface;
use Snipe\BanBuilder\CensorWords;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Valid;


/**
 * @Route("/maison")
 */
class MaisonController extends AbstractController
{
    /**
     * @Route("/maisonLieu/{id}", name="maisonLieu", methods={"GET"})
     */
    public function maisonLieuAction($id, request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $prodCats = $em->getRepository(Maison::class)->findBy(array('LieuMaison' => $id));
        $cat = $em->getRepository(LieuMaison::class)->find($id);
        $catNom = $cat->getLieu();
        $categories = $em->getRepository(LieuMaison::class)->findAll();
        return $this->render('maison/maisonLieu.html.twig', array(
            'maisons' => $prodCats,
            'lieu' => $catNom,
            'lieux'=>$categories,

        ));
    }

    /**
     * @Route("/", name="maison_index", methods={"GET","POST"})
     */
    public function index(MaisonRepository $maisonRepository, LieuMaisonRepository $lieuMaisonRepository,Request $request, PaginatorInterface $paginator, \Swift_Mailer $mailer, UserInterface $user): Response
    {
        $donnees = $maisonRepository->findAll();
        $lieux = $lieuMaisonRepository->findAll();

        $maisons = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );

        $maison = new Maison();
        $maison->setDateAjout(new \DateTime());
        $form = $this->createForm(MaisonType::class, $maison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            /** @var UploadedFile $image1File */
            $image1File = $form->get('image1')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($image1File) {
                $originalFilename = pathinfo($image1File->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$image1File->guessExtension();

                // Move the file to the directory where brochures are stored

                $image1File->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );


                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $maison->setImage1($newFilename);

            }
            $maison->setUser($user);
            $mail = $form->get('email')->getData();
            $description = $form->get('description')->getData();
            $censor = new CensorWords;
            $censor->setDictionary('BadWords','fr');
            $descr = $censor->censorString($description);
            $maison->setDescription($descr['clean']);
            $entityManager->persist($maison);
            $entityManager->flush();
            // On crée le message
            $message = (new \Swift_Message('NOUVELLE MAISON'))
                // On attribue l'expéditeur
                ->setFrom('travelbios@gmail.com')
                // On attribue le destinataire
                ->setTo($mail)
                // On crée le texte avec la vue
                ->setBody(
                    $this->renderView(
                        'Emails/emailmaison.html.twig', compact('maison')
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);

            $this->addFlash('message', 'Une nouvelle maison a été bien ajoutée'); // Permet un message flash de renvoi
            return $this->redirectToRoute('maison_index');
        }

        return $this->render('maison/index.html.twig', [
            'maisons' => $maisons,
            'lieux' => $lieux,
            'maison' => $maison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/mesmaison", name="maison_index_user", methods={"GET","POST"})
     */
    public function indexByUSer( MaisonRepository $maisonRepository, LieuMaisonRepository $lieuMaisonRepository,Request $request, PaginatorInterface $paginator, \Swift_Mailer $mailer, UserInterface $user): Response
    {
        $donnees = $maisonRepository->findBy(array('user' => $user));
        $lieux = $lieuMaisonRepository->findAll();

        $maisons = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );

        $maison = new Maison();
        $maison->setDateAjout(new \DateTime());
        $form = $this->createForm(MaisonType::class, $maison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            /** @var UploadedFile $image1File */
            $image1File = $form->get('image1')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($image1File) {
                $originalFilename = pathinfo($image1File->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$image1File->guessExtension();

                // Move the file to the directory where brochures are stored

                $image1File->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );


                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $maison->setImage1($newFilename);

            }
            $maison->setUser($user);
            $mail = $form->get('email')->getData();
            $description = $form->get('description')->getData();
            $censor = new CensorWords;
            $censor->setDictionary('BadWords','fr');
            $descr = $censor->censorString($description);
            $maison->setDescription($descr['clean']);
            $entityManager->persist($maison);
            $entityManager->flush();
            // On crée le message
            $message = (new \Swift_Message('NOUVELLE MAISON'))
                // On attribue l'expéditeur
                ->setFrom('travelbios@gmail.com')
                // On attribue le destinataire
                ->setTo($mail)
                // On crée le texte avec la vue
                ->setBody(
                    $this->renderView(
                        'Emails/emailmaison.html.twig', compact('maison')
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);

            $this->addFlash('message', 'Une nouvelle maison a été bien ajoutée'); // Permet un message flash de renvoi
            return $this->redirectToRoute('maison_index');
        }

        return $this->render('maison/index.html.twig', [
            'maisons' => $maisons,
            'lieux' => $lieux,
            'maison' => $maison,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/admin", name="maison_index_back", methods={"GET"})
     */
    public function indexBack(MaisonRepository $maisonRepository): Response
    {
        return $this->render('maison/maisonBACK.html.twig', [
            'maisons' => $maisonRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="maison_new", methods={"GET","POST"})
     */
    public function new(Request $request , \Swift_Mailer $mailer): Response
    {
        $maison = new Maison();
        $maison->setDateAjout(new \DateTime());
        $form = $this->createForm(MaisonType::class, $maison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            /** @var UploadedFile $image1File */
            $image1File = $form->get('image1')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($image1File) {
                $originalFilename = pathinfo($image1File->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$image1File->guessExtension();

                // Move the file to the directory where brochures are stored

                $image1File->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );


                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $maison->setImage1($newFilename);

            }

            $entityManager->persist($maison);
            $entityManager->flush();
            $mail = $request->request->get('email');
            // On crée le message
            $message = (new \Swift_Message('NOUVELLE MAISON'))
                // On attribue l'expéditeur
                ->setFrom('azizdridi203@gmail.com')
                // On attribue le destinataire
                ->setTo($mail)
                // On crée le texte avec la vue
                ->setBody(
                    $this->renderView(
                        'Emails/emailmaison.html.twig', compact('maison')
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);

            $this->addFlash('message', 'Une nouvelle maison a été bien ajoutée'); // Permet un message flash de renvoi
            return $this->redirectToRoute('maison_index');
        }



        return $this->render('maison/new.html.twig', [
            'maison' => $maison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/searchajax", name="ajaxsearch", methods={"GET"})
     */
    public function searchajax(MaisonRepository $repository,Request $request)
    {
        $repository=$this->getDoctrine()->getRepository(Maison::class);
        $requestString = $request->get('searchValue');
        $maisons = $repository->findMaisonByAdresse($requestString);
        return $this->render('maison/ajax.html.twig',[
        "maisons"=>$maisons,
        ]);

    }

    /**
     * @Route("/fitre", name="filtre", methods={"POST"})
     */
    public function filtre(MaisonRepository $repository,Request $request): Response
    {
        $repository=$this->getDoctrine()->getRepository(Maison::class);
            // data is an array with "name", "email", and "message" keys
            // $data = $form->getData();
            $key1 = $request->request->get('form[max]');
            $key2 = $request->request->get('form[min]');
            $key3 = $request->request->get('form[types]');


        $maisons = $repository->findMaisonBy($key1,$key2);

        return $this->render('maison/index.html.twig', [
            'maisons' => $maisons,

        ]);
    }


    /**
     * @Route("/{id}", name="maison_show", methods={"GET"})
     */
    public function show(Maison $maison): Response
    {
        return $this->render('maison/show.html.twig', [
            'maison' => $maison,
        ]);
    }
    /**
     * @Route("/{id}/pdf", name="maison_show_pdf", methods={"GET"})
     */
    public function showPDF(Maison $maison): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('PDF/showPDF.html.twig', [
            'maison' => $maison,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }

    /**
     * @Route("/{id}/admin", name="maison_show_back", methods={"GET"})
     */
    public function showBack(Maison $maison): Response
    {
        return $this->render('maison/showBACK.html.twig', [
            'maison' => $maison,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="maison_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Maison $maison): Response
    {
        $form = $this->createForm(MaisonType::class, $maison);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            /** @var UploadedFile $image1File */
            $image1File = $form->get('image1')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($image1File) {
                $originalFilename = pathinfo($image1File->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename . '-' . uniqid() . '.' . $image1File->guessExtension();

                // Move the file to the directory where brochures are stored

                $image1File->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );


                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
            $maison->setImage1($newFilename);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maison_index');
        }

        return $this->render('maison/edit.html.twig', [
            'maison' => $maison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit/admin", name="maison_edit_back", methods={"GET","POST"})
     */
    public function editBack(Request $request, Maison $maison): Response
    {
        $form = $this->createForm(MaisonType::class, $maison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maison_index_back');
        }

        return $this->render('maison/editBACK.html.twig', [
            'maison' => $maison,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="maison_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Maison $maison): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maison->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($maison);
            $entityManager->flush();
        }

        return $this->redirectToRoute('maison_index');
    }

    /**
     * @Route("maison/search ", name="search")
     */
    public function searchAction(Request $request,NormalizerInterface $Normalizer)
{
$repository = $this->getDoctrine()->getRepository(Maison::class);
$requestString=$request->get('searchValue');
$maisons = $repository->findStudentByAdresse($requestString);
$jsonContent = $Normalizer->normalize($maisons, 'json',['groups'=>'maisons']);
$retour=json_encode($jsonContent);
return new Response($retour);
}


}
