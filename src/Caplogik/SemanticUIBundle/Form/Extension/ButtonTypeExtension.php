<?php

namespace Caplogik\SemanticUIBundle\Form\Extension;

use Caplogik\SemanticUIBundle\Form\Extension\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class ButtonTypeExtension extends AbstractTypeExtension
{
    public function getExtendedType()
    {
        return ButtonType::class;
    }
}
