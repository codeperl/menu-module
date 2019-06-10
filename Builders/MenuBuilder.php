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
                ->submenu('<a href="#authorizationSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Authorization</a>', VerticalMenu::new()->setAttribute('id', 'authorizationSubmenu')->addClass('list-unstyled collapse')
                    ->action('\Modules\Account\Http\Controllers\ResourcesController@index', 'Resources')
                    ->action('\Modules\Account\Http\Controllers\PermissionsController@index', 'Permissions')
                    ->action('\Modules\Account\Http\Controllers\AssignResourcesToPermissionsController@index', 'Assign resource to permission')
                    ->action('\Modules\Account\Http\Controllers\RolesController@index', 'Roles')
                    ->action('\Modules\Account\Http\Controllers\AssignRolesToUsersController@index', 'Assign role to user')
                    ->action('\Modules\Account\Http\Controllers\AssignPermissionsToUsersController@index', 'Assign permission to user')
                )
                ->setActiveFromRequest();
        });
    }
}