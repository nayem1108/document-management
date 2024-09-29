<?php

namespace Nayem1108\DocumentManagement;

use Illuminate\Support\ServiceProvider;

class DocumentManagementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Load package views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'document-management');

        // Load package routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        if ($this->app->runningInConsole()) {
            // Publishing configuration
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('document-management.php'),
            ], 'config');

            // Publishing the views
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/document-management'),
            ], 'views');

            // Publishing assets (if you have any)
            $this->publishes([
                __DIR__ . '/../resources/assets' => public_path('vendor/document-management'),
            ], 'assets');

            // Publishing translation files
            $this->publishes([
                __DIR__ . '/../resources/lang' => resource_path('lang/vendor/document-management'),
            ], 'lang');

            // Registering package commands (if you have any)
            // $this->commands([]);

            // Event listener registration
            \Event::listen(DocumentCreated::class, function ($event) {
                // Handle the event
                // You can access the document via $event->document
                // For example, send a notification
                \Log::info('Document created: ' . $event->document->title);
            });
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'document-management');

        // Register the main class to use with the facade
        $this->app->singleton('document-management', function () {
            return new DocumentManagement;
        });
    }
}
