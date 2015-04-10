<?php namespace Inzicht\WbsoUtils;

use Illuminate\Support\ServiceProvider;

class WbsoUtilsServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('inzicht/wbso-utils');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['command.wbso.generate'] = $this->app->share(
            function ($app) {
                return new GenerateWBSOReportCommand();
            }
        );
        $this->commands(array($this->app['command.wbso.generate']));
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
