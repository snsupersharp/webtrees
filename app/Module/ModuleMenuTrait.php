<?php
/**
 * webtrees: online genealogy
 * Copyright (C) 2019 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace Fisharebest\Webtrees\Module;

/**
 * Trait ModuleMenuTrait - default implementation of ModuleMenuInterface
 */
trait ModuleMenuTrait
{
    /** @var int The default position for this menu.  It can be changed in the control panel. */
    protected $menu_order = 0;

    /**
     * Users change change the order of menus using the control panel.
     *
     * @param int $menu_order
     *
     * @return void
     */
    public function setMenuOrder(int $menu_order): void
    {
        $this->menu_order = $menu_order;
    }

    /**
     * Users change change the order of menus using the control panel.
     *
     * @return int
     */
    public function getMenuOrder(): int
    {
        return $this->menu_order ?: $this->defaultMenuOrder();
    }

    /**
     * The default position for this menu.
     *
     * @return int
     */
    public function defaultMenuOrder(): int
    {
        return 9999;
    }
}
