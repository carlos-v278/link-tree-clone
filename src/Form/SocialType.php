<?php

namespace App\Form;

use App\Entity\Social;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'attr' => ['class' => 'row_input'],
                    'label' => 'Nom du reseau '
                ]
            )
            ->add(
                'social_url',
                TextType::class,
                [
                    'attr' => ['class' => 'row_input'],
                    'label' => 'Lien du reseau '
                ]
            )
            ->add(
                'font_awesome_icon_name',
                TextType::class,
                [
                    'attr' => ['class' => 'row_input'],
                    'label' => ' Nom icone Font Awesome '
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Social::class,
        ]);
    }
}
