<?php

namespace Crush\Http;

use Crush\Http\ParamsBuilder;
use Illuminate\Support\ServiceProvider;

/**
 * ParamsBuilder Service Provider Class.
 */
class ParamsBuilderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Crush\Http\Contracts\ParamsBuilder', function($app) {
            return new ParamsBuilder();
        });
    }

}
