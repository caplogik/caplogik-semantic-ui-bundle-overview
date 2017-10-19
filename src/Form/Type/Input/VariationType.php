<?php

namespace AppBundle\Form\Type\Input;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\Type\Input\Variation\IconType;
use AppBundle\Form\Type\Input\Variation\LabeledType;
use AppBundle\Form\Type\Input\Variation\SizeType;

final class VariationType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_input_variation';
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('icon', IconType::class);
        $builder->add('labeled', LabeledType::class);

        $builder->add('action', TextType::class, [ 'csui_input' => '' ]);

        $builder->add('transparent', TextType::class, [ 'csui_input' => 'transparent' ]);

        $builder->add('inverted', TextType::class, [ 'csui_input' => 'inverted' ]);

        $builder->add('fluid', TextType::class, [ 'csui_input' => 'fluid' ]);

        $builder->add('size', SizeType::class);
    }
}
