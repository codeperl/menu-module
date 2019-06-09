<?php

namespace Modules\Menu\Builders;

use Spatie\Menu\Laravel\Menu;

/**
 * Class MenuBuilder
 * @package Modules\Menu\Builders
 */
class MenuBuilder
{
    /**
     * @param $name
     */
    public static function create($name)
    {
        Menu::macro($name, function () {
            return Menu::new()->addClass('list-unstyled components')
                ->action('HomeController@index', 'Home')
                ->submenu('<a href="#roleSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Basic</a>', Menu::new()->setAttribute('id', 'roleSubmenu')->addClass('list-unstyled collapse show')
                    ->addClass('dropdown-toggle')
                    ->action('\Modules\Account\Http\Controllers\RolesController@index', 'Roles'))
                ->setActiveFromRequest();
        });
    }
}