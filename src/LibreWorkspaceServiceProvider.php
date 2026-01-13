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
        $this->mergeConfigFrom(__DIR__ . '/config/libreworkspace.php', 'libreworkspace');

        // Bridge: Socialite/SocialiteProviders erwartet config('services.libreworkspace')
        $lw = config('libreworkspace');

        config()->set('services.libreworkspace', [
            'client_id'     => $lw['client_id']     ?? null,
            'client_secret' => $lw['client_secret'] ?? null,
            'redirect'      => $lw['redirect']      ?? null,
        ]);

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
