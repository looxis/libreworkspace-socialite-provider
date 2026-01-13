<?php

namespace Looxis\LibreworkspaceSocialiteProvider;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController
{
    public function redirect()
    {
        return Socialite::driver('libreworkspace')->redirect();
    }

    public function callback()
    {
        $socialiteUser = Socialite::driver('libreworkspace')->user();

        $user = $this->findOrCreateUser($socialiteUser);
        Auth::login($user);

        return redirect()->intended();
    }

    public function findOrCreateUser($socialiteUser)
    {
        $group = config('libreworkspace.group');

        if(! empty($group) ) {
            if (!in_array($group, $socialiteUser->user['groups'])) {
                abort(403);
            }
        }

        $user = User::where('name', $socialiteUser->username)->first();

        if (!$user) {
            $user = User::create([
                'name' => $socialiteUser->username,
                'email' => $socialiteUser->email,
                'password' => bcrypt(str()->random(16)),
                'api_token' => str()->random(60),
            ]);
        }

        return $user;

    }
}
