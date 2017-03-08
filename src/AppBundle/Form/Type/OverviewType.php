<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

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
        // uncategorized
        $builder->add('text', TextType::class);
        $builder->add('textarea', TextareaType::class);
        $builder->add('email', EmailType::class);
        $builder->add('integer', IntegerType::class);
        $builder->add('money', MoneyType::class);
        $builder->add('number', NumberType::class);
        $builder->add('currency', CurrencyType::class, [
            'preferred_choices' => ['EUR']
        ]);
        $builder->add('password', PasswordType::class);
        $builder->add('percent', PercentType::class);
        $builder->add('search', SearchType::class);
        $builder->add('url', UrlType::class);
        $builder->add('range', RangeType::class);


        // checkbox
        $builder->add('checkbox', CheckboxType::class);
        $builder->add('toggleCheckbox', CheckboxType::class);
        $builder->add('sliderCheckbox', CheckboxType::class);

        // choice
        $choiceOptions = [
            'choices' => [
                'Apples' => 'apples',
                'Oranges' => 'oranges',
                'Pears' => 'pears',
                'Grapefruit' => 'grapefruit'
            ]
        ];

        $multipleChoiceOptions = array_merge([
            'multiple' => true
        ], $choiceOptions);

        $expandedChoiceOptions = array_merge([
            'expanded' => true
        ], $choiceOptions);

        $multipleExpandedChoiceOptions = array_merge([], $multipleChoiceOptions, $expandedChoiceOptions);



        $builder->add('choice', ChoiceType::class, $choiceOptions);
        $builder->add('multipleChoice', ChoiceType::class, $multipleChoiceOptions);
        $builder->add('expandedChoice', ChoiceType::class, $expandedChoiceOptions);
        $builder->add('multipleExpandedChoice', ChoiceType::class, $multipleExpandedChoiceOptions);
        $builder->add('multipleExpandedToggleChoice', ChoiceType::class, $multipleExpandedChoiceOptions);
        $builder->add('multipleExpandedSliderChoice', ChoiceType::class, $multipleExpandedChoiceOptions);

        // date and time
        $builder->add('date', DateType::class);
        $builder->add('datetime', DateTimeType::class);
        $builder->add('time', TimeType::class);
        $builder->add('birthday', BirthdayType::class);

        // button
        $builder->add('button', ButtonType::class);
        $builder->add('submit', SubmitType::class);
        $builder->add('reset', ResetType::class);
    }
}
