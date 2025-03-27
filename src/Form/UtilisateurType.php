<?php

namespace App\Form;

use App\Entity\Equipe;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id')
            ->add('nom')
            ->add('prenom')
            ->add('role')
            ->add('email')
            ->add('mdp_hash')
            ->add('adresse')
            ->add('tel')
            ->add('status')
            ->add('image_url')
            ->add('birthday', null, [
                'widget' => 'single_text',
            ])
            ->add('equipe_id', EntityType::class, [
                'class' => Equipe::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
