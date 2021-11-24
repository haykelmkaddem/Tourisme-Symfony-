<?php

namespace App\Form;

use App\Entity\Artiste;
use App\Entity\CategorieArt;
use App\Entity\EvenApprouve;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArtisteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomArtiste')
            ->add('descriptionArtiste')
            ->add('CategorieArt',EntityType::class, [
            'choice_label'=>'titreCatArt',
            'class'=>CategorieArt::class
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Artiste::class,
        ]);
    }
}
