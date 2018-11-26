<?php

namespace App\Providers;

use App\Models\Area;
use App\Models\CardEvent;
use App\Models\Map;
use App\Repositories\AreaRepository;
use App\Repositories\CardEventRepository;
use App\Repositories\MapRepository;
use App\Repositories\RepositoryInterface;
use App\Services\AreaService;
use App\Services\CardEventService;
use App\Services\MapService;
use Doctrine\DBAL\Connection;
use Illuminate\Support\ServiceProvider;

class ReviveServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Bind Repositories
        $this->app->bind(
            'App\Repositories\RepositoryInterface', function ($app) {
            return new CardEventRepository(new CardEvent());
        });
        $this->app->bind(
            'App\Repositories\RepositoryInterface', function ($app) {
            return new MapRepository(new Map());
        });
        $this->app->bind(
            'App\Repositories\RepositoryInterface', function ($app) {
            return new AreaRepository(new Area());
        });

        // Bind Services
        $this->app->singleton('cardEventService', function ($app) {
            return new CardEventService($this->app->make('App\Repositories\CardEventRepository'));
        });
        $this->app->singleton('mapService', function ($app) {
            return new MapService($this->app->make('App\Repositories\MapRepository'));
        });
        $this->app->singleton('areaService', function ($app) {
            return new AreaService($this->app->make('App\Repositories\AreaRepository'));
        });

    }
}
