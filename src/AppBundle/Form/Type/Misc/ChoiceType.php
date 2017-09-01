<?php

namespace AppBundle\Form\Type\Misc;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType as BaseChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class ChoiceType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_misc_choice';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return BaseChoiceType::class;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                'Apples' => 0,
                'Oranges' => 1,
                'Pears' => 2,
                'Grapefruit' => 3
            ]
        ]);
    }
}
