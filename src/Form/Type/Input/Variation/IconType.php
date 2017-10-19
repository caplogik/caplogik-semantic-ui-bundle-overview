<?php

namespace AppBundle\Form\Type\Input\Variation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

final class IconType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_input_variation_icon';
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
        $builder->add('simple', TextType::class, [
            'csui_input' => 'icon',
            'csui_input_right' => '<i class="search icon"></i>'
        ]);

        $builder->add('left', TextType::class, [
            'csui_input' => 'left icon',
            'csui_input_right' => '<i class="users icon"></i>'
        ]);

        $builder->add('circular', TextType::class, [
            'csui_input' => 'icon',
            'csui_input_right' => '<i class="circular search link icon"></i>'
        ]);

        $builder->add('invertedCircular', TextType::class, [
            'csui_input' => 'icon',
            'csui_input_right' => '<i class="inverted circular search link icon"></i>'
        ]);
    }
}
