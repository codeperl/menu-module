<?php

namespace Modules\Menu\Builders;

use Modules\Menu\Extended\VerticalMenu;

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
        VerticalMenu::macro($name, function () {
            return VerticalMenu::new()->addClass('list-unstyled components')
                ->action('HomeController@index', 'Home')
                ->submenu('<a href="#basicSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Basic</a>', VerticalMenu::new()->setAttribute('id', 'basicSubmenu')->addClass('list-unstyled collapse')
                    ->action('\Modules\Account\Http\Controllers\RolesController@index', 'Roles')
                    ->action('\Modules\Account\Http\Controllers\PermissionsController@index', 'Permissions'))
                ->setActiveFromRequest();
        });
    }
}