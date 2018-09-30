<?php

namespace App\Providers;

use App\Models\CardEvent;
use App\Repositories\CardEventRepository;
use App\Repositories\RepositoryInterface;
use App\Services\CardEventService;
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

        // Bind Services
        $this->app->singleton('cardEventService', function ($app) {
            return new CardEventService($this->app->make('App\Repositories\CardEventRepository'));
        });


    }
}
