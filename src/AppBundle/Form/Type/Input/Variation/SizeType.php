<?php

namespace AppBundle\Form\Type\Input\Variation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

final class SizeType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_input_variation_size';
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
        $builder->add('mini', TextType::class, [ 'csui_input' => 'mini' ]);
        $builder->add('small', TextType::class, [ 'csui_input' => 'small' ]);
        $builder->add('large', TextType::class, [ 'csui_input' => 'large' ]);
        $builder->add('big', TextType::class, [ 'csui_input' => 'big' ]);
        $builder->add('huge', TextType::class, [ 'csui_input' => 'huge' ]);
        $builder->add('massive', TextType::class, [ 'csui_input' => 'massive' ]);
    }
}
