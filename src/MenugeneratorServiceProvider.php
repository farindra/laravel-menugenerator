<?php

namespace Farindra\Menugenerator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class MenugeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require  __DIR__ . '/routes.php';
        }

        $this->loadViewsFrom(__DIR__ . '/Views', 'menugenerator');

        $this->publishes([
            __DIR__ . '/../config/menugenerator.php'  => config_path('menugenerator.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/Views'   => resource_path('views/vendor/menugenerator'),
        ], 'view');

        $this->publishes([
            __DIR__ . '/../assets' => public_path('vendor/farindra-menugenerator'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/../migrations/2021_08_11_073824_create_menus_table.php' => database_path('migrations/2021_08_11_073824_create_menus_table.php'),
            __DIR__ . '/../migrations/2021_08_11_074006_create_menu_items_table.php' => database_path('migrations/2021_08_11_074006_create_menu_items_table.php'),
            __DIR__ . '/../migrations/2022_01_05_293551_add-role-id-to-menu-items-table.php' => database_path('2022_01_05_293551_add-role-id-to-menu-items-table.php'),
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('farindra-menugenerator', function () {
            return new FarindraMenugenerator();
        });

        $this->app->make('Farindra\Menugenerator\Controllers\MenuController');
        $this->mergeConfigFrom(
            __DIR__ . '/../config/menugenerator.php',
            'menugenerator'
        );
    }
}
