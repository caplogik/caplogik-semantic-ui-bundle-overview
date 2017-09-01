<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use AppBundle\Form\Type\Field\StateType;
use AppBundle\Form\Type\Field\VariationType;

final class FieldType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_field';
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
