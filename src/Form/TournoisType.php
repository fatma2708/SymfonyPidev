<?php

namespace App\Form;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use App\Entity\Tournois;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournoisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Removed the id field as you don't want to display it
            ->add('nom', null, ['attr' => ['class' => 'form-control']])
            ->add('sport', ChoiceType::class, [
                'choices' => [
                    'Football' => 'football',
                    'Basketball' => 'basketball',
                    'Volleyball' => 'volleyball',
                ],
                'placeholder' => 'Choisir un sport',
                'required' => true,
            ])
            ->add('dateDebut', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('dateFin', null, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('adresse', null, [
                'attr' => ['class' => 'form-control'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tournois::class,
        ]);
    }
}
