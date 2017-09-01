<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;

/**
 */
final class MenuBuilder
{
    /**
     * @var FactoryInterface
     */
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param array $options
     * @return ItemInterface
     */
    public function createMainMenu(array $options)
    {
        $menu = $this->factory->createItem('main', [
            'label' => 'menu.main'
        ]);

        $menu->addChild('home', [
            'label' => 'menu.main.home',
            'route' => 'app.home.home'
        ]);

        $menu->addChild('installation', [
            'label' => 'menu.home.installation',
            'route' => 'app.home.installation'
        ]);

        $menu->addChild('overview', [
            'label' => 'menu.home.overview',
            'route' => 'app.home.overview'
        ]);

        return $menu;
    }

    /**
     * @param array $options
     * @return ItemInterface
     */
    public function createFormMenu(array $options)
    {
        $menu = $this->factory->createItem('form', [
            'label' => 'menu.form'
        ]);

        $menu->addChild('installation', [
            'label' => 'menu.home.installation',
            'route' => 'app.home.installation'
        ]);

        $menu->addChild('overview', [
            'label' => 'menu.home.overview',
            'route' => 'app.home.overview'
        ]);

        return $menu;
    }

    /**
     * @param array $options
     * @return ItemInterface
     */
    public function createMenuMenu(array $options)
    {
        $menu = $this->factory->createItem('menu', [
            'label' => 'menu.menu'
        ]);

        $menu->addChild('installation', [
            'label' => 'menu.home.installation',
            'route' => 'app.home.installation'
        ]);

        $menu->addChild('overview', [
            'label' => 'menu.home.overview',
            'route' => 'app.home.overview'
        ]);

        return $menu;
    }
}
