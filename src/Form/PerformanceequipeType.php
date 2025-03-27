<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Performanceequipe;
use App\Entity\Tournois;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PerformanceequipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('victoires')
            ->add('pertes')
            ->add('rang')
            ->add('equipe', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'id', // or use a more descriptive property such as 'nom'
            ])
            ->add('tournois', EntityType::class, [
                'class' => Tournois::class,
                'choice_label' => 'id', // adjust as needed
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Performanceequipe::class,
        ]);
    }
}
