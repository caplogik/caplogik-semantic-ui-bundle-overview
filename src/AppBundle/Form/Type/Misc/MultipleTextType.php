<?php

namespace AppBundle\Form\Type\Misc;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;

final class MultipleTextType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_misc_multiple_text';
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('first', TextType::class);
        $builder->add('second', TextType::class);
        $builder->add('third', TextType::class);
    }
}
