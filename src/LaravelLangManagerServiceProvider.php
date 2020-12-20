<?php

namespace Kapitalonline\LaravelLangManager;

use Illuminate\Support\ServiceProvider;
use Kapitalonline\LaravelLangManager\Commands\LaravelLangManagerCommand;

class LaravelLangManagerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-lang-manager.php' => config_path('laravel-lang-manager.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-lang-manager'),
            ], 'views');

            $migrationFileName = 'create_laravel_lang_manager_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                LaravelLangManagerCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-lang-manager');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-lang-manager.php', 'laravel-lang-manager');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
