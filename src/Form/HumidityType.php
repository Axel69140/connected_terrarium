<?php

namespace App\Form;

use App\Entity\Humidity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HumidityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('value', NumberType::class, [
                'label' => 'Humidité de jour dans le terrarium (en %)',
                'required' => true
            ])
            ->add('nightValue', NumberType::class, [
                'label' => 'Humidité de nuit dans le terrarium (en %)',
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
            'data_class' => Humidity::class,
        ]);
    }
}
