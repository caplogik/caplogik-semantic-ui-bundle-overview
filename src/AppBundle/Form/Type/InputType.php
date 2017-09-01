<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use AppBundle\Form\Type\Input\StateType;
use AppBundle\Form\Type\Input\VariationType;

final class InputType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_input';
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('state', StateType::class);
        $builder->add('variation', VariationType::class);
    }
}
