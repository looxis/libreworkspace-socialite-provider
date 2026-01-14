# Libreworkspace Socialite Provider

A laravel socialite provider for libreworkspace

```bash
composer require looxis/libreworkspace-socialite-provider
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/),
then follow the provider specific instructions below.

### Configure settings in `.env`

<<<<<<< HEAD
```php
'libreworkspace' => [
    'provider_url' => env('LIBREWORKSPACE_PROVIDER_URL'),
    'client_id' => env('LIBREWORKSPACE_CLIENT_ID'),
    'client_secret' => env('LIBREWORKSPACE_CLIENT_SECRET'),
    'redirect' => env('LIBREWORKSPACE_REDIRECT_URI', config('app.url') . '/auth/libreworkspace/callback')
],
```

=======
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

>>>>>>> 0.3
### Usage

You should now be able to use the provider:

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
