<?php

namespace Caplogik\SemanticUIBundle\Form\Extension;

use Doctrine\ORM\Mapping\FieldResult;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InputFieldTypeExtension extends AbstractTypeExtension
{
    public function getExtendedType()
    {
        return FormType::class;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('field_attr', []);
        $resolver->setAllowedTypes('field_attr', ['array']);
    }
}
