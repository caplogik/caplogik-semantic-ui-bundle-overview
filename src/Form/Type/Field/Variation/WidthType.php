<?php

namespace AppBundle\Form\Type\Field\Variation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

final class WidthType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_field_variation_width';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('one', TextType::class, [ 'csui_field' => 'one wide' ]);
        $builder->add('two', TextType::class, [ 'csui_field' => 'two wide' ]);
        $builder->add('three', TextType::class, [ 'csui_field' => 'three wide' ]);
        $builder->add('four', TextType::class, [ 'csui_field' => 'four wide' ]);
        $builder->add('five', TextType::class, [ 'csui_field' => 'five wide' ]);
        $builder->add('six', TextType::class, [ 'csui_field' => 'six wide' ]);
        $builder->add('seven', TextType::class, [ 'csui_field' => 'seven wide' ]);
        $builder->add('eight', TextType::class, [ 'csui_field' => 'eight wide' ]);
        $builder->add('nine', TextType::class, [ 'csui_field' => 'nine wide' ]);
        $builder->add('ten', TextType::class, [ 'csui_field' => 'ten wide' ]);
        $builder->add('eleven', TextType::class, [ 'csui_field' => 'eleven wide' ]);
        $builder->add('twelve', TextType::class, [ 'csui_field' => 'twelve wide' ]);
    }
}
