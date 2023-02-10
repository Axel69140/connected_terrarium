<?php

namespace App\Form;

use App\Entity\Temperature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TemperatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('value', NumberType::class, [
                'label' => 'Température de jour dans le terrarium (en degré)',
                'required' => true
            ])
            ->add('nightValue', NumberType::class, [
                'label' => 'Température de jour dans le terrarium (en degré)',
                'required' => true
            ])
            ->add('delta', NumberType::class, [
                'label' => 'Variation autorisée',
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Temperature::class,
        ]);
    }
}
