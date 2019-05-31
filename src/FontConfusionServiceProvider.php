<?php

/**
 * Created by PhpStorm.
 * User: taoyun
 * Date: 2019/5/29
 * Time: 18:17
 */

namespace Sibosend\FontConfusion;

use Illuminate\Support\ServiceProvider;
use Sibosend\FontConfusion\ConfusedFontFactory;

class FontConfusionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('sibosend/font-confusion');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('confusedFont', function ($app) {
            return ConfusedFontFactory::createConfusedFont($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}
