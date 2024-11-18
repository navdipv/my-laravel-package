<?php

namespace Demo\LaravelPackage;

use Illuminate\Support\ServiceProvider;

class LaravelPackageServiceProvider extends ServiceProvider {
    public function register() {
        // Optional: Register the DemoClass as a singleton or binding in the service container
        $this->app->singleton('demo', function ($app) {
            return new DemoClass();
        });
    }

    public function boot() {
        // Boot services
    }
}
