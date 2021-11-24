<?php

namespace App\Form;

use App\Entity\LieuMaison;
use App\Entity\Maison;
use App\Entity\TPmaison;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'attr' => ['pattern' => '[a-zA-Z\s]*','maxlength' => 60,'minlength' => 2]
            ))
            ->add('phone', TextType::class, array(
                'attr' => ['pattern' => '[0-9]*','maxlength' => 8,'minlength' => 8]
            ))
            ->add('email', EmailType::class)
            ->add('prix', TextType::class, array(
                'attr' => ['pattern' => '[0-9]*','maxlength' => 8]
            ))
            ->add('nsm', ChoiceType::class, [
                'choices'  => [
                    'Nuit' => 'nuit',
                    'Semaine' => 'semaine',
                    'Mois' => 'mois',
                ],
            ])
            ->add('LieuMaison',EntityType::class, [
                'choice_label'=>'lieu',
                'class'=>LieuMaison::class
            ])
            ->add('adresse', TextType::class ,array(
                'attr' => array(
                    'placeholder' => 'Ex: 28 rue de Tunis,Mourouj 6 ,Ben Arous,Tunis '
                )))

            ->add('check_in', ChoiceType::class, [
                'choices'  => [
                    '08:00' => '08:00',
                    '09:00' => '09:00',
                    '10:00' => '10:00',
                    '11:00' => '11:00',
                    '12:00' => '12:00',
                    '13:00' => '13:00',
                    '14:00' => '14:00',
                    '15:00' => '15:00',
                    '16:00' => '16:00',
                    '17:00' => '17:00',
                    '18:00' => '18:00',
                ],
            ])
            ->add('check_out', ChoiceType::class, [
                'choices'  => [
                    '08:00' => '08:00',
                    '09:00' => '09:00',
                    '10:00' => '10:00',
                    '11:00' => '11:00',
                    '12:00' => '12:00',
                    '13:00' => '13:00',
                    '14:00' => '14:00',
                    '15:00' => '15:00',
                    '16:00' => '16:00',
                    '17:00' => '17:00',
                    '18:00' => '18:00',
                ],
            ])
            ->add('piscine', ChoiceType::class, [
                'choices'  => [
                    'Oui' => 'oui',
                    'Non' => 'non',
                ],
            ])
            ->add('Bedrooms')
            ->add('bathrooms')
            ->add('maxppl')
            ->add('smoke', ChoiceType::class, [
                'choices'  => [
                    'Permis' => 'permis',
                    'Interdit' => 'interdit',
                ],
            ])
            ->add('pet', ChoiceType::class, [
                'choices'  => [
                    'Permis' => 'permis',
                    'Interdit' => 'interdit',
                ],
            ])
            ->add('description')
            ->add('TPmaison',EntityType::class, [
                'choice_label'=>'nom',
                'class'=>TPmaison::class
            ])
            ->add('image1', FileType::class, [

                // unmapped means that this field is not associated to any entity property
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
            'data_class' => Maison::class,
        ]);
    }
}
