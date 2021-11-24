<?php

namespace App\Form;

use App\Entity\Guide;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class GuideType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cin',null,[
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrer CIN',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'CIN doit contenir {{ limit }} chiffres',

                        'max' => 8,
                    ]),
                ],
            ])
            ->add('imgCinFront',FileType::class,array('data_class' => null))
            ->add('imgCinBack',FileType::class,array('data_class' => null))
            ->add('cvFile',FileType::class,array('data_class' => null))
            ->add('verifPhoto',FileType::class,array('data_class' => null))
            ->add('etat')
            ->add('idUser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Guide::class,
        ]);
    }
}
