<?php

namespace AppBundle\Form\Type\Input;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;

final class StateType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_input_state';
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('focus', TextType::class, [ 'csui_input' => 'focus' ]);
        $builder->add('loading', TextType::class, [ 'csui_input' => 'loading' ]);
        $builder->add('disabled', TextType::class, [ 'csui_input' => 'disabled' ]);
        $builder->add('error', TextType::class, [ 'csui_input' => 'error' ]);
    }
}
