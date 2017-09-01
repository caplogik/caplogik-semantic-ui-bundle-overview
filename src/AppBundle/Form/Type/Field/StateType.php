<?php

namespace AppBundle\Form\Type\Field;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use AppBundle\Form\Type\Field\State\ErrorType;
use AppBundle\Form\Type\Field\State\DisabledType;
use AppBundle\Form\Type\Field\State\RequiredType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class StateType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_field_state';
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('focus', TextType::class, [ 'csui_input' => 'focus' ]);
        $builder->add('loading', TextType::class, [ 'csui_input' => 'loading' ]);

        $builder->add('required', RequiredType::class);
        $builder->add('disabled', DisabledType::class);
        $builder->add('error', ErrorType::class);
    }
}
