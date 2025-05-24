<?php
    namespace App\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\SearchType as SearchInputType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;

    class SearchType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('query', SearchInputType::class, [
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Rechercher articles...',
                        'class' => 'form-control'
                    ]
                ])
                ->add('submit', SubmitType::class, [
                    'label' => 'Rechercher',
                    'attr' => ['class' => 'btn btn-primary']
                ]);
        }
    }