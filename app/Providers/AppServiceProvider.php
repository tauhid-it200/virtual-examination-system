<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
//        $this->app['request']->server->set('HTTPS', $this->app->environment() != 'local');
//        if (env('APP_ENV') === 'production') {
            
//        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
