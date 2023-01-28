<?php

namespace App\Form;

use App\Entity\Template;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TemplateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('baseline')
            ->add('youtube_url')
            ->add('section_1_bg_color', ColorType::class, [
                'data' => '#FCFAF8',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_1_title_color', ColorType::class, [
                'data' => '#383838',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_1_baseline_color', ColorType::class, [
                'data' => '#383838',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section2_bg_color', ColorType::class, [
                'data' => '#FCFAF8',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_3_bg_color', ColorType::class, [
                'data' => '#FCFAF8',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_3_bg_color_card', ColorType::class, [
                'data' => '#FFFFFF',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_3_color_txt_card', ColorType::class, [
                'data' => '#383838',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_4_bg_color', ColorType::class, [
                'data' => '#FCFAF8',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_4_bg_color_btn', ColorType::class, [
                'data' => '#14CF93',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_4_color_txt_btn', ColorType::class, [
                'data' => '#FFFFFF',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_5_bg_color', ColorType::class, [
                'data' => 'abcdef',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ])

            ->add('section_5_icon_color', ColorType::class, [
                'data' => '#FCFAF8',
                'attr' => ['class' => 'row_input'],
                'label' => 'The ZIP/Postal code'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Template::class,
        ]);
    }
}
