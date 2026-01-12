# Libreworkspace Socialite Provider

A laravel socialite provider for libreworkspace

```bash
composer require looxis/libreworkspace-socialite-provider
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/),
then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'libreworkspace' => [
    'provider_url' => env('LIBREWORKSPACE_PROVIDER_URL'),
    'client_id' => env('LIBREWORKSPACE_CLIENT_ID'),
    'client_secret' => env('LIBREWORKSPACE_CLIENT_SECRET'),
    'redirect' => env('LIBREWORKSPACE_REDIRECT_URI', config('app.url') . '/auth/libreworkspace/callback')
],
```

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
