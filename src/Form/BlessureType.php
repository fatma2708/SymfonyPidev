<?php

namespace App\Form;

use App\Entity\Blessure;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlessureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id')
            ->add('athlete_id')
            ->add('typeBlessure')
            ->add('description')
            ->add('dateBlessure', null, [
                'widget' => 'single_text',
            ])
            ->add('dateReprise', null, [
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Blessure::class,
        ]);
    }
}
