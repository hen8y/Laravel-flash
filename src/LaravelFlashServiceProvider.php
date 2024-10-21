<?php
namespace Hen8y\Flash;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class LaravelFlashServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::directive("flashCss", function () {
            return "<?php echo flashCss(); ?>";
        });

        Blade::directive("flashJs", function () {
            return "<?php echo flashJs(); ?>";
        });

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'flash');

        $this->publishes([
            __DIR__ . '/../config/flash.php' => config_path('flash.php')
        ], 'flash-config');

        $this->publishes([
            __DIR__ . '/../public/build' => public_path('vendor/hen8y/laravel-flash'),
        ], 'flash-assets');
    }


    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/flash.php', 'flash');

        $this->app->singleton("flash", function ($app) {
            return $app->make(LaravelFlash::class);
        });
    }
}
