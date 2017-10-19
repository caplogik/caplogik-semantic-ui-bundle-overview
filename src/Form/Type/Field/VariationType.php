<?php

namespace AppBundle\Form\Type\Field;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use AppBundle\Form\Type\Field\Variation\InlineType;
use AppBundle\Form\Type\Field\Variation\WidthType;

final class VariationType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_field_variation';
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('inline', InlineType::class);
        $builder->add('width', WidthType::class);
    }
}
