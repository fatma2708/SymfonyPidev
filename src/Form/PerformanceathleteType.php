<?php

namespace App\Form;

use App\Entity\Matchsportif;
use App\Entity\Performanceathlete;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PerformanceathleteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id')
            ->add('minutesJouees')
            ->add('buts')
            ->add('passesDecisives')
            ->add('tirs')
            ->add('interceptions')
            ->add('fautes')
            ->add('cartonsJaunes')
            ->add('cartonsRouges')
            ->add('rebonds')
            ->add('athlete_id', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'id',
            ])
            ->add('match_id', EntityType::class, [
                'class' => Matchsportif::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Performanceathlete::class,
        ]);
    }
}
