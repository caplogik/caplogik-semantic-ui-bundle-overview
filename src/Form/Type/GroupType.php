<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use AppBundle\Form\Type\Misc\MultipleTextType;

final class GroupType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_group';
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('evenlyDivided', MultipleTextType::class, [ 'csui_group' => 'three' ]);
        $builder->add('grouped', MultipleTextType::class, [ 'csui_group' => 'grouped' ]);
        $builder->add('equalWidth', MultipleTextType::class, [ 'csui_group' => 'equal width' ]);
        $builder->add('inline', MultipleTextType::class, [ 'csui_group' => 'inline' ]);
    }
}
