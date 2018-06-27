<?php

namespace Railken\LaraOre;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Railken\LaraOre\Api\Support\Router;

class CatalogueServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../config/ore.catalogue.php' => config_path('ore.catalogue.php')], 'config');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutes();

        config(['ore.permission.managers' => array_merge(Config::get('ore.permission.managers', []), [
            //\Railken\LaraOre\Catalogue\CatalogueManager::class,
        ])]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Railken\Laravel\Manager\ManagerServiceProvider::class);
        $this->app->register(\Railken\LaraOre\ApiServiceProvider::class);
        $this->mergeConfigFrom(__DIR__.'/../config/ore.catalogue.php', 'ore.catalogue');
    }

    /**
     * Load routes.
     *
     * @return void
     */
    public function loadRoutes()
    {
        Router::group(Config::get('ore.catalogue.http.router'), function ($router) {
            $controller = Config::get('ore.catalogue.http.controller');
            
            $router->get('/', ['uses' => $controller . '@index']);
            $router->post('/', ['uses' => $controller . '@create']);
            $router->put('/{id}', ['uses' => $controller . '@update']);
            $router->delete('/{id}', ['uses' => $controller . '@remove']);
            $router->get('/{id}', ['uses' => $controller . '@show']);
        });
    }
}
