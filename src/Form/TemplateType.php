<?php

namespace App\Form;

use App\Entity\Template;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TemplateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'baseline',
                TextType::class,
                [
                    'attr' => ['class' => 'row_input'],
                    'label' => 'Baseline '
                ]
            )
            ->add(
                'youtube_url',
                TextType::class,
                [
                    'attr' => ['class' => 'row_input'],
                    'label' => 'Id video yo '
                ]
            )
            ->add('section_1_bg_color', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur de fond section 1 '
            ])

            ->add('section_1_title_color', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur du titre section 1'
            ])

            ->add('section_1_baseline_color', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur de la baseline'
            ])

            ->add('section2_bg_color', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur de fond section 2'
            ])

            ->add('section_3_bg_color', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur de fond section 3'
            ])

            ->add('section_3_bg_color_card', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Fond de la card Promo'
            ])
            ->add('section_4_bg_color', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur de fond section 4'
            ])

            ->add('section_4_bg_color_btn', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur de fond des boutons ressources'
            ])

            ->add('section_4_color_txt_btn', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur du texte des boutons'
            ])

            ->add('section_5_bg_color', ColorType::class, [
                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur de fond section 5'
            ])

            ->add('section_5_icon_color', ColorType::class, [

                'attr' => ['class' => 'row_input'],
                'label' => 'Couleur des icones réseaux'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Template::class,
        ]);
    }
}
