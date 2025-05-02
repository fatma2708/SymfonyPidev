<?php

namespace App\Form;

use App\Entity\Athlete;
use App\Entity\Blessure;
use App\Entity\DossierMedical;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DossierMedicalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('athlete', EntityType::class, [
                'class' => Athlete::class,
                'choice_label' => 'name',
                'placeholder' => 'Choisissez un athlète',
                'required' => true,
            ])
            ->add('dernierCheckup', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Dernier check-up',
            ])
            ->add('etatAthlete', ChoiceType::class, [
                'choices'  => [
                    'Bon' => 'Bon',
                    'Moyen' => 'Moyen',
                    'Critique' => 'Critique',
                ],
                'placeholder' => 'Sélectionnez un état',
                'required' => true,
                'label' => "État de l'athlète",
            ])
            ->add('allergies', TextareaType::class, [
                'required' => false,
                'label' => 'Allergies',
                'attr' => ['rows' => 3],
            ])
            ->add('vaccinations', TextareaType::class, [
                'required' => false,
                'label' => 'Vaccinations',
                'attr' => ['rows' => 3],
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'label' => 'Description',
                'attr' => ['rows' => 4],
            ])
            /* ->add('blessures', EntityType::class, [
                'class' => Blessure::class,
                'choice_label' => 'id',
                'multiple' => true,
            ]) */
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DossierMedical::class,
        ]);
    }

    
    #[Route('/dossier-medical/{id}/export-pdf', name: 'dossier_medical_export_pdf')]
    public function exportDossierMedicalPdf(
        int $id,
        EntityManagerInterface $entityManager
    ): Response {
        // Récupérer le dossier médical par son ID
        $dossierMedical = $entityManager->getRepository(\App\Entity\DossierMedical::class)->find($id);
    
        if (!$dossierMedical) {
            throw $this->createNotFoundException('Le dossier médical n\'existe pas.');
        }
    
        // Configurer Dompdf
        $pdfOptions = new \Dompdf\Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new \Dompdf\Dompdf($pdfOptions);
    
        // Rendre le template Twig en HTML
        $html = $this->renderView('pdf/dossier_medical_pdf.html.twig', [
            'dossier_medical' => $dossierMedical,
        ]);
    
        // Charger le HTML dans Dompdf
        $dompdf->loadHtml($html);
    
        // Configurer le format du PDF
        $dompdf->setPaper('A4', 'portrait'); // Vous pouvez changer en 'landscape' si nécessaire
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
