<?php

namespace Looxis\LibreworkspaceSocialiteProvider;

use SocialiteProviders\Manager\SocialiteWasCalled;

class LibreWorkspaceExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param  \SocialiteProviders\Manager\SocialiteWasCalled  $socialiteWasCalled
     * @return void
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('libreworkspace', Provider::class);
    }
}
