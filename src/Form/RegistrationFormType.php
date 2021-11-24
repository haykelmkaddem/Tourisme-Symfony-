<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Doctrine\DBAL\Types\TextType;
use Itfirst\RecaptchaBundle\Type\RecaptchaSubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',TextType::class, ['constraints' => [
        new NotBlank([
            'message' => '*ce chmp est obligatoire!',
        ])
    ]])
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
            ->add('email')
            ->add('numtel',NumberType::class,[
                'constraints' => [
                    new NotBlank([
                        'message' => '*ce chmp est obligatoire!',
                    ])
                ],
            ])
            ->add('pays',CountryType::class)
            ->add('image', FileType::class,array('data_class' => null))
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('captcha', RecaptchaSubmitType::class, ['label' => 'Créer mon compte' ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
