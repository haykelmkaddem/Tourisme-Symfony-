<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Utilisateur2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class,[
            'constraints' => [
        new NotBlank([
            'message' => 'Merci d\'entrer un e-mail',
        ]),
    ],
        'required' => true,
        'attr' => ['class' =>'form-control'],
    ])
            ->add('roles')
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('datenaissance')
            ->add('numtel')
            ->add('pays')
            ->add('image')
            ->add('isVerified')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
