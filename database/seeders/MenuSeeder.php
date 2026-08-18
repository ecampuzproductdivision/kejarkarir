<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the menus table with the currently existing application navigation.
     *
     * The hierarchy mirrors the sidebar: a top-level "Dashboard" menu and a
     * "Setting" menu that groups its child (sub) menus.
     */
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Dashboard',
                'url' => '/dashboard',
                'icon' => 'ti-layout-dashboard',
                'sort_order' => 0,
                'status' => 'active',
                'children' => [],
            ],
            [
                'name' => 'Setting',
                'url' => '#',
                'icon' => 'ti-settings',
                'sort_order' => 10,
                'status' => 'active',
                'children' => [
                    ['name' => 'User', 'url' => '/users', 'icon' => 'ti-users', 'sort_order' => 0, 'status' => 'active'],
                    ['name' => 'Roles', 'url' => '/roles', 'icon' => 'ti-shield', 'sort_order' => 1, 'status' => 'active'],
                    ['name' => 'Menus', 'url' => '/menus', 'icon' => 'ti-menu-2', 'sort_order' => 2, 'status' => 'active'],
                    ['name' => 'Permission', 'url' => '/permissions', 'icon' => 'ti-lock', 'sort_order' => 3, 'status' => 'active'],
                ],
            ],
        ];

        foreach ($menus as $menuData) {
            $children = $menuData['children'];
            unset($menuData['children']);

            $parent = Menu::updateOrCreate(
                ['url' => $menuData['url']],
                $menuData
            );

            foreach ($children as $childData) {
                Menu::updateOrCreate(
                    ['url' => $childData['url']],
                    array_merge($childData, ['parent_id' => $parent->id])
                );
            }
        }
    }
}
