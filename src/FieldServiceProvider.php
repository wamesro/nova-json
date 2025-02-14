<?php

namespace Stepanenko3\NovaJSon;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-json-array-field', __DIR__.'/../dist/js/field.js');
        });
    }
}
