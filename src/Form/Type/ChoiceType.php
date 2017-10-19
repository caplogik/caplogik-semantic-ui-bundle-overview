<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use AppBundle\Form\Type\Misc\ChoiceType as BaseChoiceType;

final class ChoiceType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_choice';
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
        $builder->add('native', BaseChoiceType::class, [ 'csui_input' => false ]);
        $builder->add('simple', BaseChoiceType::class);
        $builder->add('multiple', BaseChoiceType::class, [ 'multiple' => true ]);

        $builder->add('nativeExpanded', BaseChoiceType::class, [ 'expanded' => true, 'csui_input' => false ]);
        $builder->add('simpleExpanded', BaseChoiceType::class, [ 'expanded' => true ]);
        $builder->add('multipleExpanded', BaseChoiceType::class, [ 'expanded' => true, 'multiple' => true ]);

        // $builder->add('choice', ChoiceType::class, $choiceOptions);
        // $builder->add('expandedChoice', ChoiceType::class, $expandedChoiceOptions);
        // $builder->add('multipleChoice', ChoiceType::class, $multipleChoiceOptions);
        // $builder->add('multipleExpandedChoice', ChoiceType::class, $multipleExpandedChoiceOptions);
        // $builder->add('groupedExpandedChoice', ChoiceType::class, $expandedChoiceOptions);
        // $builder->add('groupedMultipleExpandedChoice', ChoiceType::class, $multipleExpandedChoiceOptions);
        // $builder->add('groupedMultipleExpandedToggleChoice', ChoiceType::class, $multipleExpandedChoiceOptions);
        // $builder->add('groupedMultipleExpandedSliderChoice', ChoiceType::class, $multipleExpandedChoiceOptions);
    }
}
