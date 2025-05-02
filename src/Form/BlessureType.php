<?php

namespace App\Form;

use App\Entity\Athlete;
use App\Entity\Blessure;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlessureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateBlessure', DateType::class, [
                'widget' => 'single_text',
                'required' => true,
                'label' => 'Date de la blessure',
            ])
            ->add('dateRetour', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Date de retour',
            ])
            ->add('description', null, [
                'label' => 'Description',
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Entorse' => 'entorse',
                    'Fracture' => 'fracture',
                    'Luxation' => 'luxation',
                    'Tendinite' => 'tendinite',
                    'Élongation' => 'elongation',
                    'Contusion' => 'contusion',
                    'Déchirure' => 'déchirure',
                    'Autre' => 'autre',
                ],
                'placeholder' => 'Sélectionnez un type de blessure',
                'required' => true,
                'label' => 'Type de blessure',
            ])
            ->add('athlete', EntityType::class, [
                'class' => Athlete::class,
                'choice_label' => 'name',
                'placeholder' => 'Choisissez un athlète',
                'required' => true,
                'label' => 'Athlète concerné',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Blessure::class,
        ]);
    }
}
