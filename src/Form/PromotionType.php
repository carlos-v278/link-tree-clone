<?php

namespace App\Form;

use App\Entity\Promotion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'attr' => ['class' => 'row_input'],
                    'label' => 'Nom de la promotion '
                ]
            )
            ->add(
                'promotional_code',
                TextType::class,
                [
                    'attr' => ['class' => 'row_input'],
                    'label' => 'Code promo',
                ]
            )
            ->add(
                'date_start',
                DateType::class,
                [
                    'attr' => ['class' => 'row_input'],
                    'label' => 'Date de Début'
                ]
            )
            ->add(
                'date_end',
                DateType::class,
                [
                    'attr' => ['class' => 'row_input'],
                    'label' => 'Date de fin'
                ]
            )
            ->add(
                'bg_color',
                ColorType::class,
                [

                    'attr' => ['class' => 'row_input'],
                    'label' => 'Couleur de fond de la card '
                ]
            )

            ->add('color_txt', ColorType::class, [

                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur du code promo '
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
        ]);
    }
}
