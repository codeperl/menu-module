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
                    ->route('resources.index', 'Resources')
                    ->route('permissions.index', 'Permissions')
                    ->route('assignResourcesToPermissions.index', 'Assign resource to permission')
                    ->route('roles.index', 'Roles')
                    ->route('assignRolesToUsers.index', 'Assign role to user')
                    ->route('assignPermissionsToUsers.index', 'Assign permission to user')
                )
                ->setActiveFromRequest();
        });
    }
}