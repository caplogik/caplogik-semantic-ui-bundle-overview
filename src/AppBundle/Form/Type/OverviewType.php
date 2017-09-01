<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use AppBundle\Form\Type\FieldType;
use AppBundle\Form\Type\InputType;
use AppBundle\Form\Type\GroupType;
use AppBundle\Form\Type\CheckboxType;

final class OverviewType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'app_overview';
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
        $builder->add('input', InputType::class);
        $builder->add('field', FieldType::class);
        $builder->add('group', GroupType::class);
        $builder->add('checkbox', CheckboxType::class);

        // choice
        // $builder->add('choice', ChoiceType::class, $choiceOptions);
        // $builder->add('expandedChoice', ChoiceType::class, $expandedChoiceOptions);
        // $builder->add('multipleChoice', ChoiceType::class, $multipleChoiceOptions);
        // $builder->add('multipleExpandedChoice', ChoiceType::class, $multipleExpandedChoiceOptions);
        // $builder->add('groupedExpandedChoice', ChoiceType::class, $expandedChoiceOptions);
        // $builder->add('groupedMultipleExpandedChoice', ChoiceType::class, $multipleExpandedChoiceOptions);
        // $builder->add('groupedMultipleExpandedToggleChoice', ChoiceType::class, $multipleExpandedChoiceOptions);
        // $builder->add('groupedMultipleExpandedSliderChoice', ChoiceType::class, $multipleExpandedChoiceOptions);



        // uncategorized
        // $builder->add('text', TextType::class);
        // $builder->add('textarea', TextareaType::class);
        // $builder->add('email', EmailType::class);
        // $builder->add('integer', IntegerType::class);
        // $builder->add('money', MoneyType::class);
        // $builder->add('number', NumberType::class);
        // $builder->add('currency', CurrencyType::class, [
        //     'preferred_choices' => ['EUR']
        // ]);
        // $builder->add('password', PasswordType::class);
        // $builder->add('percent', PercentType::class);
        // $builder->add('search', SearchType::class);
        // $builder->add('url', UrlType::class);
        // $builder->add('range', RangeType::class);




        // date and time
        // $builder->add('date', DateType::class);
        // $builder->add('datetime', DateTimeType::class);
        // $builder->add('time', TimeType::class);
        // $builder->add('birthday', BirthdayType::class);

        // button
        // $builder->add('button', ButtonType::class);
        // $builder->add('submit', SubmitType::class);
        // $builder->add('reset', ResetType::class);
    }
}
