<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class EditProfoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',null,[
                'constraints' => [
                    new NotBlank([
                        'message' => '*ce chmp est obligatoire!',
                    ])
                ],
            ])
            ->add('prenom',null,[
                'constraints' => [
                    new NotBlank([
                        'message' => '*ce chmp est obligatoire!',
                    ])
                ],
            ])
            ->add('datenaissance',BirthdayType::class)
            ->add('email',EmailType::class, ['constraints' => [
                new NotBlank([
                    'message' => '*ce chmp est obligatoire!',
                ])
            ]])
            ->add('numtel',NumberType::class,[
                'constraints' => [
                    new NotBlank([
                        'message' => '*ce chmp est obligatoire!',
                    ])
                ],
            ])
            ->add('pays',CountryType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
