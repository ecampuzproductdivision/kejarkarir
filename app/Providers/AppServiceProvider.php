<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // Share top-level active menus (with their active children) to all views.
        // This powers the dynamic sidebar without hitting the DB on every request
        // thanks to Laravel's view composers which are lazily resolved.
        View::composer('*', function ($view) {
            if (Auth::check() && Schema::hasTable('menus')) {
                $sidebarMenus = Menu::with(['children' => function ($q) {
                        $q->where('status', 'active')->orderBy('sort_order');
                    }])
                    ->whereNull('parent_id')
                    ->where('status', 'active')
                    ->orderBy('sort_order')
                    ->get();

                $view->with('sidebarMenus', $sidebarMenus);
            }
        });
    }
}
