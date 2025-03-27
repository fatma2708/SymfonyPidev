<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Matchsportif;
use App\Entity\Tournois;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatchsportifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('lieu')
            ->add('tournois_id', EntityType::class, [
                'class' => Tournois::class,
                'choice_label' => 'id',
            ])
            ->add('equipe1_id', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'id',
            ])
            ->add('equipe2_id', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Matchsportif::class,
        ]);
    }
}
