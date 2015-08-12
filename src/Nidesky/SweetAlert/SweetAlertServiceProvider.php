<?php namespace Nidesky\SweetAlert;

use Illuminate\Support\ServiceProvider;

class SweetAlertServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'sweetalert');

        $this->publishes([
            __DIR__.'/../../../public' => public_path('nidesky/sweet-alert')
        ], 'public');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('sweetAlert', function() {
            return new SweetAlert();
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
