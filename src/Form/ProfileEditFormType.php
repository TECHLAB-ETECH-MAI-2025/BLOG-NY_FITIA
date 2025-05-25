<?php
    namespace App\Form;

    use App\Entity\User;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\EmailType;
    use Symfony\Component\Form\Extension\Core\Type\TelType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use Symfony\Component\Validator\Constraints\NotBlank;
    use Symfony\Component\Validator\Constraints\Email;

    class ProfileEditFormType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options): void
        {
            $builder
                ->add('email', EmailType::class, [
                    'constraints' => [
                        new NotBlank(['message' => 'Veuillez entrer une adresse email']),
                        new Email(['message' => 'Veuillez entrer une adresse email valide'])
                    ]
                ])
                ->add('firstname', TextType::class, [
                    'label' => 'Prénom',
                    'required' => false
                ])
                ->add('lastname', TextType::class, [
                    'label' => 'Nom',
                    'required' => false
                ])
                ->add('phone', TelType::class, [
                    'label' => 'Téléphone',
                    'required' => false
                ]);
        }

        public function configureOptions(OptionsResolver $resolver): void
        {
            $resolver->setDefaults([
                'data_class' => User::class,
            ]);
        }
    }