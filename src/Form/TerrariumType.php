<?php

namespace App\Form;

use App\Entity\Terrarium;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
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
            ->add('nightHour', TimeType::class, [
                'label' => 'Début du cycle nuit',
                'required' => true
            ])
            ->add('dayHour', TimeType::class, [
                'label' => 'Début du cycle jour',
                'required' => true
            ])
            ->add('name', TextType::class, [
                'label' => 'Nom du terrarium',
                'required' => false
            ])
            ->add('specimen')
            ->add('temperature')
            ->add('humidity')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Terrarium::class,
        ]);
    }
}
