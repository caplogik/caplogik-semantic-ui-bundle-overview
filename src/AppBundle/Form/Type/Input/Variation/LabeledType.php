<?php

namespace AppBundle\Form\Type\Input\Variation;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

final class LabeledType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_input_variation_labeled';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('default', TextType::class, [
            'csui_input' => 'labeled',
            'csui_input_left' => '<div class="ui label">https://</div>'
        ]);

        $builder->add('basic', TextType::class, [
            'csui_input' => 'right labeled',
            'csui_input_right' => '<div class="ui basic label">kg</div>'
        ]);

        $builder->add('dropdown', TextType::class, [
            'csui_input' => 'right labeled',
            'csui_input_right' =>
                '<div class="ui dropdown label">
                    <div class="text">.com</div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item">.com</div>
                        <div class="item">.net</div>
                        <div class="item">.org</div>
                    </div>
                </div>'
        ]);

        $builder->add('tag', TextType::class, [
            'csui_input' => 'right labeled left icon',
            'csui_input_left' => '<i class="tags icon"></i>',
            'csui_input_right' => '<a class="ui tag label">Add Tag</a>'
        ]);

        $builder->add('corner', TextType::class, [
            'csui_input' => 'left corner labeled',
            'csui_input_right' => '<div class="ui left corner label"><i class="asterisk icon"></i></div>'
        ]);
    }
}
