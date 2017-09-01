<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType as BaseCheckboxType;

final class CheckboxType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_checkbox';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'csui_group' => 'four'
        ]);
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('native', BaseCheckboxType::class, [ 'csui_input' => false ]);
        $builder->add('default', BaseCheckboxType::class);
        $builder->add('toggle', BaseCheckboxType::class, [ 'csui_input' => 'toggle' ]);
        $builder->add('slider', BaseCheckboxType::class, [ 'csui_input' => 'slider' ]);
    }
}
