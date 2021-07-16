<?php

namespace App\Form;
use App\Entity\Chambre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('typachambre')
            ->add('nombrelit')
            ->add('typelit' , ChoiceType::class,
                [
                    'choices'  =>
                        [
                            'simple' => true,
                            'double' => true,
                            'triple' => true,
                            'quadre' => true,
                        ],
                    'multiple'=>true,
                    'expanded'=>true,

                ])
            ->add('statut')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
