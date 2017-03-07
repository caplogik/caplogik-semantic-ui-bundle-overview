<?php

namespace Caplogik\SemanticUIBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class TestController extends Controller
{
    /**
     * @Method({"GET", "POST"})
     * @Route("/", name="app.home.test_semantic")
     *
     * @param Request $request
     * @return Response
     */
    public function testAction(Request $request)
    {
        $foods = [
            'Apples' => 'apples',
            'Oranges' => 'oranges',
            'Pears' => 'pears',
            'Grapefruit' => 'grapefruit'
        ];

        $builder = $this->createFormBuilder(null, ['method' => 'GET']);

        // text
        $builder->add('text', Symfony\Component\Form\Extension\Core\Type\TextType::class);
        $builder->add('textarea', Symfony\Component\Form\Extension\Core\Type\TextareaType::class);
        $builder->add('email', Symfony\Component\Form\Extension\Core\Type\EmailType::class);
        $builder->add('integer', Symfony\Component\Form\Extension\Core\Type\IntegerType::class);
        $builder->add('money', Symfony\Component\Form\Extension\Core\Type\NumberType::class);
        $builder->add('password', Symfony\Component\Form\Extension\Core\Type\PasswordType::class);
        $builder->add('percent', Symfony\Component\Form\Extension\Core\Type\PercentType::class);
        $builder->add('search', Symfony\Component\Form\Extension\Core\Type\SearchType::class);
        $builder->add('url', Symfony\Component\Form\Extension\Core\Type\UrlType::class);
        $builder->add('range', Symfony\Component\Form\Extension\Core\Type\RangeType::class);
        $builder->add('checkbox', Symfony\Component\Form\Extension\Core\Type\CheckboxType::class);

        // choice
        $builder->add('choice', Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, [
            'choices' => $foods
        ]);

        $builder->add('multipleChoice', Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, [
            'choices' => $foods,
            'multiple' => true
        ]);

        $builder->add('expandedChoice', Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, [
            'choices' => $foods,
            'expanded' => true
        ]);

        $builder->add('multipleExpandedChoice', Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, [
            'choices' => $foods,
            'multiple' => true,
            'expanded' => true
        ]);

        // date and time
        $builder->add('date', Symfony\Component\Form\Extension\Core\Type\DateType::class);
        $builder->add('datetime', Symfony\Component\Form\Extension\Core\Type\DateTimeType::class);
        $builder->add('time', Symfony\Component\Form\Extension\Core\Type\TimeType::class);
        $builder->add('birthday', Symfony\Component\Form\Extension\Core\Type\BirthdayType::class);

        // button
        $builder->add('button', Symfony\Component\Form\Extension\Core\Type\ButtonType::class);
        $builder->add('submit', Symfony\Component\Form\Extension\Core\Type\SubmitType::class);
        $builder->add('reset', Symfony\Component\Form\Extension\Core\Type\ResetType::class);

        $form = $builder->getForm();
        $form->handleRequest($request);

        return $this->render('home/test_semantic.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
