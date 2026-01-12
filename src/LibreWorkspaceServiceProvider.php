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
    {}

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Event::listen(SocialiteWasCalled::class, function (SocialiteWasCalled $event) {
            $event->extendSocialite('libreworkspace', Provider::class);
        });
    }
}
