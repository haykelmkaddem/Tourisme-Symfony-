<?php

namespace App\Form;

use App\Entity\Artiste;
use App\Entity\CategorieEven;
use App\Entity\EvenApprouve;
use App\Entity\LieuEven;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class EvenApprouveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreEven')
            ->add('descriptionEven')
            ->add('dateDebutEven')
            ->add('dateFinEven')
            ->add('heureDebutEven')
            ->add('heureFinEven')
            ->add('CategorieEven',EntityType::class, [
                'choice_label'=>'titreCat',
                'class'=>CategorieEven::class
            ])
            ->add('LieuEven',EntityType::class, [
                'choice_label'=>'titreLieu',
                'class'=>LieuEven::class
            ])
            ->add('Artiste',EntityType::class, [
                'choice_label'=>'nomArtiste',
                'class'=>Artiste::class,
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('imageFilename', FileType::class, [
                'mapped' => false,
                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'attr' => ['class' => 'custom-file-input'],

            ])




        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EvenApprouve::class,
        ]);
    }
}
