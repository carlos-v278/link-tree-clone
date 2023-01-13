<?php

namespace App\Form;

use App\Entity\Template;
use Symfony\Component\Form\AbstractType;
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
            ->add('section_1_bg_color')
            ->add('section_1_title_color')
            ->add('section_1_baseline_color')
            ->add('section2_bg_color')
            ->add('section_3_bg_color')
            ->add('section_3_bg_color_card')
            ->add('section_3_color_txt_card')
            ->add('section_4_bg_color')
            ->add('section_4_bg_color_btn')
            ->add('section_4_color_txt_btn')
            ->add('section_5_bg_color')
            ->add('section_5_icon_color');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Template::class,
        ]);
    }
}
