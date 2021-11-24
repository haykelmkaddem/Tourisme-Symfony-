<?php

namespace App\Form;

use App\Entity\AvisDestination;
use blackknight467\StarRatingBundle\Form\RatingType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisDestinationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('note',RatingType::class, [
                'label' => ' ',
                'data' => 5,

            ])

            ->add('commentaire', TextareaType::class, [
                'label' => 'Votre avis à propos cette destination '
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AvisDestination::class,
        ]);
    }
}
