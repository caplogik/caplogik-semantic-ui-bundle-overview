<?php

namespace Caplogik\SemanticUIBundle\Form\Extension;

use Caplogik\SemanticUIBundle\Form\Extension\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;

class FormTypeExtension extends AbstractTypeExtension
{
    public function getExtendedType()
    {
        return FormType::class;
    }
}
