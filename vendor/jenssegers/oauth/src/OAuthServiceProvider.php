<?php namespace Jenssegers\OAuth;

use Illuminate\Support\ServiceProvider;
use OAuth\ServiceFactory;
use OAuth\Common\Storage\SymfonySession;

class OAuthServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Fix for PSR-4
        $this->package('jenssegers/oauth', 'oauth', realpath(__DIR__));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('oauth', function($app)
        {
            $factory = new ServiceFactory;

            $session = $app->make('session')->driver();
            $storage = new SymfonySession($session);

            return new OAuth($factory, $storage);
        });
    }
}
