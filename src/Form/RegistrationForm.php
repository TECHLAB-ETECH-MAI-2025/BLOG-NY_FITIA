<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegistrationForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       $builder
            ->add('email', null, [
                'label' => 'Email *',
                'attr' => ['placeholder' => 'Enter your email']
            ])
            ->add('firstName', null, [
                'attr' => ['placeholder' => 'First Name']
            ])
            ->add('lastName', null, [
                'attr' => ['placeholder' => 'Last Name']
            ])
            ->add('phone', null, [
                'attr' => ['placeholder' => 'Phone number']
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options'  => [
                    'label' => 'Password *',
                    'attr' => ['placeholder' => 'Enter your password']
                ],
                'second_options' => [
                    'label' => 'Confirm password *',
                    'attr' => ['placeholder' => 'Confirm your password']
                ],
                'mapped' => false,
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos conditions.',
                    ]),
                ],
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
