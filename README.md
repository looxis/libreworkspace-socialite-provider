# Libreworkspace Socialite Provider

A laravel socialite provider for libreworkspace

```bash
composer require looxis/libreworkspace-socialite-provider
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/),
then follow the provider specific instructions below.

### Configure settings in `.env`

```
LIBREWORKSPACE_PROVIDER_URL=https://portal.yourdomain.com
LIBREWORKSPACE_CLIENT_ID=XXXXXX
LIBREWORKSPACE_CLIENT_SECRET=YYYYYYYYYYYYYYYYYY
LIBREWORKSPACE_REDIRECT_URI=http://yourapp.com/auth/libreworkspace/callback
LIBREWORKSPACE_GROUP=yourapp
LIBREWORKSPACE_SCOPES="openid profile email groups"
```

with group you can define the group a user must have in the Libreworkspace, otherwise it will throw a 403

with scopes you can define the scopes the openID response should include

### Usage

You should now be able to use the provider:

```php
<form method="GET" action="{{ route('libreworkspace.auth.redirect') }}" class="form-horizontal">
    {!! csrf_field() !!}
    <div class="field">
        <p class="control">
            <button class="button is-default is-medium is-fullwidth" value="'single Sign On'">
                <span class="icon-right-space">
                    <i class="fa fa-user"></i>
                </span>
                Single Sign On
            </button>
        </p>
    </div>
</form>
```

This package is using an internal AuthController and routes, so there is no need to add them.

Nevertheless you can use the built in Socialite methods, if necessary:

```php
return Socialite::driver('libreworkspace')->redirect();
```

To redirect to the authentication, and then:

```php
$user = Socialite::driver('libreworkspace')->user()
```

## Versioning

- `0.x` – legacy versions including auth routes and controllers (deprecated)
- `1.0+` – pure Socialite provider without routes or login logic
