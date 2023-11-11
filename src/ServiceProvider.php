<?php


namespace Nanziok\TencentIMSDK;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $source = realpath(__DIR__.'/config.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([
                $source => config_path('tencentsdkim.php')
            ], 'laravel-tencentsdk-im');
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('tencentsdkim');
        }

        $this->mergeConfigFrom($source, 'tencentsdkim');
    }
}
