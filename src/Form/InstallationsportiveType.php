<?php

namespace App\Form;

use App\Entity\Installationsportive;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InstallationsportiveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id')
            ->add('nom')
            ->add('typeInstallation')
            ->add('adresse')
            ->add('capacite')
            ->add('isDisponible')
            ->add('image_url')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Installationsportive::class,
        ]);
    }
}
