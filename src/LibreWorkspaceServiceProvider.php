<?php

namespace Looxis\LibreworkspaceSocialiteProvider;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use SocialiteProviders\Manager\SocialiteWasCalled;
use Illuminate\Support\Facades\Event;
use SocialiteProviders\Manager\Config;
use Laravel\Socialite\Facades\Socialite;

class LibreWorkspaceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //$this->mergeConfigFrom(__DIR__ . '/config/libreworkspace.php', 'libreworkspace');

    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Event::listen(SocialiteWasCalled::class, function (SocialiteWasCalled $event) {
            $event->extendSocialite('libreworkspace', Provider::class);
        });


        // Load routes for authentication (if needed)
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
