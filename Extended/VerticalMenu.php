<?php

namespace Modules\Menu\Extended;


use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Activatable;

class VerticalMenu extends Menu
{
    public function setActiveFromUrl(string $url, string $root = '/')
    {
        $this->applyToAll(function (Menu $menu) use ($url, $root) {
            $menu->setActiveFromUrl($url, $root);
            if($menu->isActive()) {
                $menu->htmlAttributes->addClass('list-unstyled show');
            }
        });

        $this->applyToAll(function (Activatable $item) use ($url, $root) {
            $item->determineActiveForUrl($url, $root);
        });

        return $this;
    }
}