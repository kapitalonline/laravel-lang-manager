# Laravel Dil Yönetim Sistemi

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kapitalonline/laravel-lang-manager.svg?style=flat-square)](https://packagist.org/packages/kapitalonline/laravel-lang-manager)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kapitalonline/laravel-lang-manager/run-tests?label=tests)](https://github.com/kapitalonline/laravel-lang-manager/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/kapitalonline/laravel-lang-manager.svg?style=flat-square)](https://packagist.org/packages/kapitalonline/laravel-lang-manager)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-laravel-lang-manager-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-laravel-lang-manager-laravel)

## Installation

You can install the package via composer:

```bash
composer require kapitalonline/laravel-lang-manager
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Kapitalonline\LaravelLangManager\LaravelLangManagerServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Kapitalonline\LaravelLangManager\LaravelLangManagerServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-lang-manager = new Kapitalonline\LaravelLangManager();
echo $laravel-lang-manager->echoPhrase('Hello, Kapitalonline!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kapital Online](https://github.com/KapitalOnline)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
