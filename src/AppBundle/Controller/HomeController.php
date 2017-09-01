<?php

namespace AppBundle\Controller;

use AppBundle\Form\Type\OverviewType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HomeController extends Controller
{
    /**
     * @Method({"GET"})
     * @Route("/", name="app.home.home")
     *
     * @param Request $request
     * @return Response
     */
    public function homeAction(Request $request)
    {
        return $this->render('home/home.html.twig');
    }

    /**
     * @Method({"GET"})
     * @Route("/installation", name="app.home.installation")
     *
     * @param Request $request
     * @return Response
     */
    public function installationAction(Request $request)
    {
        return $this->render('home/installation.html.twig');
    }

    /**
     * @Method({"GET", "POST"})
     * @Route("/overview", name="app.home.overview")
     *
     * @param Request $request
     * @return Response
     */
    public function overviewAction(Request $request)
    {
        $form = $this->createForm(OverviewType::class, [
            'method' => 'POST'
        ]);

        $form->handleRequest($request);

        return $this->render('home/overview.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
