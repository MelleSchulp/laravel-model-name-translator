<?php

namespace Nin\ModelNameTranslator;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Nin\ModelNameTranslator\Interfaces\ModelNameTranslatorInterface;
use Nin\ModelNameTranslator\ModelNameTranslator;

class ServiceProvider extends BaseServiceProvider
{
    public $bindings = [
        ModelNameTranslatorInterface::class => ModelNameTranslator::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/model-name-translator.php', 'model-name-translator'
        );

        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'model-name-translator');

        $this->publishes([
            __DIR__ . '/resources/lang' => resource_path('lang/vendor/model-name-translator'),
        ]);
    }
}
