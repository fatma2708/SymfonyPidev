<?php

namespace App\Controller;

use App\Entity\DossierMedical;
use App\Form\DossierMedicalType;
use App\Repository\DossierMedicalRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\BlessureRepository;

#[Route('/dossier/medical')]
final class DossierMedicalController extends AbstractController{
    #[Route(name: 'app_dossier_medical_index', methods: ['GET'])]
    public function index(DossierMedicalRepository $dossierMedicalRepository): Response
    {
        return $this->render('dossier_medical/index.html.twig', [
            'dossier_medicals' => $dossierMedicalRepository->findAll(),
        ]);
    }
    #[Route('/frontDossier',name: 'app_dossier_index_front', methods: ['GET'])]
    public function indexFront(DossierMedicalRepository $dossierMedicalRepository): Response
    {
        return $this->render('FrontOffice/dossierFront.html.twig', [
            'dossier_medicals' => $dossierMedicalRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_dossier_medical_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $dossierMedical = new DossierMedical();
        $form = $this->createForm(DossierMedicalType::class, $dossierMedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($dossierMedical);
            $entityManager->flush();

            return $this->redirectToRoute('app_dossier_medical_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dossier_medical/new.html.twig', [
            'dossier_medical' => $dossierMedical,
            'form' => $form,
        ]);
    }

  /* #[Route('/{id}', name: 'app_dossier_medical_show', methods: ['GET'])]
    public function show(DossierMedical $dossierMedical): Response
    {
        return $this->render('dossier_medical/show.html.twig', [
            'dossier_medical' => $dossierMedical,
        ]);
    } 
*/
    
    #[Route('/{id}', name: 'app_dossier_medical_show', methods: ['GET'])]
        public function show(
        DossierMedical $dossierMedical,
            BlessureRepository $blessureRepository): Response {
    $athlete = $dossierMedical->getAthlete();
    $blessures = $blessureRepository->findBy(['athlete' => $athlete]);

    return $this->render('dossier_medical/show.html.twig', [
        'dossier_medical' => $dossierMedical,
        'blessures' => $blessures,
    ]);
}
    #[Route('/{id}/edit', name: 'app_dossier_medical_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DossierMedicalType::class, $dossierMedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_dossier_medical_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dossier_medical/edit.html.twig', [
            'dossier_medical' => $dossierMedical,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_dossier_medical_delete', methods: ['POST'])]
    public function delete(Request $request, DossierMedical $dossierMedical, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dossierMedical->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($dossierMedical);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_dossier_medical_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/dossier-medical/{id}/export-pdf', name: 'dossier_medical_export_pdf')]
public function exportDossierMedicalPdf(
    int $id,
    EntityManagerInterface $entityManager
): Response {
    // Récupérer le dossier médical par son ID
    $dossierMedical = $entityManager->getRepository(DossierMedical::class)->find($id);

    if (!$dossierMedical) {
        throw $this->createNotFoundException('Le dossier médical n\'existe pas.');
    }

    // Récupérer les blessures associées
    $blessures = $dossierMedical->getBlessures();

    // Configurer Dompdf
    $pdfOptions = new \Dompdf\Options();
    $pdfOptions->set('defaultFont', 'Arial');
    $dompdf = new \Dompdf\Dompdf($pdfOptions);

    // Rendre le template Twig en HTML
    $html = $this->renderView('pdf/dossier_medical_pdf.html.twig', [
        'dossier_medical' => $dossierMedical,
        'blessures' => $blessures,
    ]);

    // Charger le HTML dans Dompdf
    $dompdf->loadHtml($html);

    // Configurer le format du PDF
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Retourner le fichier PDF en réponse
    return new Response(
        $dompdf->output(),
        200,
        [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => sprintf('inline; filename="dossier-medical-%s.pdf"', $dossierMedical->getId()),
        ]
    );
}
}
