<?php

namespace App\Form;

use App\Entity\Terrarium;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TerrariumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('minLuminosityLevel', NumberType::class,[
                'label' => 'Luminosité minimale avant l\'activation du jour synthétique (en %)',
                'required' => true
            ])
            ->add('name', TextType::class, [
                'label' => 'Nom du terrarium',
                'required' => false
            ])
            ->add('hourDay', TimeType::class, [
                'label' => 'Début heure de jour',
                'required' => true,
                'widget' => 'single_text',
                'html5' => true
            ])
            ->add('hourNight', TimeType::class, [
                'label' => 'Fin heure de jour',
                'required' => true,
                'widget' => 'single_text',
                'html5' => true
            ])
            ->add('specimen', TextareaType::class, [
                'label' => 'Spécimen',
                'required' => true,
            ])
            ->add('temperature', TemperatureType::class, [
                'label' => 'Température',
                'required' => true
            ])
            ->add('humidity',  HumidityType::class, [
                'label' => 'Humidité',
                'required' => true
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    "class" => "btn btn-primary btn-sm text-end"
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Terrarium::class,
        ]);
    }
}
