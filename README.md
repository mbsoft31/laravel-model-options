# This is my package laravel-model-options

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mbsoft31/laravel-model-options.svg?style=flat-square)](https://packagist.org/packages/mbsoft31/laravel-model-options)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mbsoft31/laravel-model-options/run-tests?label=tests)](https://github.com/mbsoft31/laravel-model-options/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mbsoft31/laravel-model-options/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/mbsoft31/laravel-model-options/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mbsoft31/laravel-model-options.svg?style=flat-square)](https://packagist.org/packages/mbsoft31/laravel-model-options)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

## Installation

You can install the package via composer:

```bash
composer require mbsoft31/laravel-model-options
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-model-options-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-model-options-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-model-options-views"
```

## Usage

```php
$laravelModelOptions = new Mbsoft31\LaravelModelOptions();
echo $laravelModelOptions->echoPhrase('Hello, Mbsoft31!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bekhouche Mouadh](https://github.com/mbsoft31)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
