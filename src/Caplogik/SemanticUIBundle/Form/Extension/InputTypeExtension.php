<?php

namespace Caplogik\SemanticUIBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InputTypeExtension extends AbstractTypeExtension
{
    public function getExtendedType()
    {
        return FormType::class;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined('input_attr');
        $resolver->setAllowedTypes('input_attr', ['array']);

        $resolver->setDefined('input_left');
        $resolver->setAllowedTypes('input_left', ['string']);

        $resolver->setDefined('input_right');
        $resolver->setAllowedTypes('input_right', ['string']);
    }
}
