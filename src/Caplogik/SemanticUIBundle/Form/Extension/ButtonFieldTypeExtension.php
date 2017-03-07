<?php

namespace Caplogik\SemanticUIBundle\Form\Extension;

use Doctrine\ORM\Mapping\FieldResult;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ButtonFieldTypeExtension extends AbstractTypeExtension
{
    public function getExtendedType()
    {
        return ButtonType::class;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefined('field_attr');
        $resolver->setAllowedTypes('field_attr', ['array']);
    }
}
