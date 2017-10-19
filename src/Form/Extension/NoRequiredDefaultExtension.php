<?php

namespace AppBundle\Form\Extension;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoRequiredDefaultExtension extends AbstractTypeExtension
{
    /**
     * @return string
     */
    public function getExtendedType()
    {
        return FormType::class;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        dump('extension');

        $resolver->setDefaults([
            'required' => false
        ]);
    }
}
