<?php

namespace Modules\Menu\Builders;


use Spatie\Menu\Menu;

/**
 * Class MenuBuilder
 * @package Modules\Menu\Builders
 */
class MenuBuilder
{
    /** @var Menu */
    private $menu;

    /**
     * MenuBuilder constructor.
     */
    public function __construct()
    {
        $this->menu = Menu::macro('main', function () {
            return Menu::new()
                ->action('HomeController@index', 'Home')
                ->action('AboutController@index', 'About')
                ->action('ContactController@index', 'Contact')
                ->setActiveFromRequest();
        });
    }

    /**
     * @return Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }
}