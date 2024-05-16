# Weight conversions in PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/isimmons/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/isimmons/weight-conversions)
[![Tests](https://img.shields.io/github/actions/workflow/status/isimmons/weight-conversions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/isimmons/weight-conversions/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/isimmons/weight-conversions.svg?style=flat-square)](https://packagist.org/packages/isimmons/weight-conversions)

Convert any number of units in grams or kilograms to pounds or stones

## Installation

You can install the package via composer:

```bash
composer require isimmons/weight-conversions
```

## Basic Usage

```php
use Isimmons\WeightConversions\Weight;

include 'vendor/autoload.php';

$amount = 100;
$pounds_from_grams = Weight::grams($amount)->toPounds();

$pounds_from_kilograms = Weight::kilograms($amount)->toPounds();

echo "$amount grams = $pounds_from_grams pounds." . PHP_EOL;
echo "$amount kilograms = $pounds_from_kilograms pounds.\n" . PHP_EOL;
```

## Available Methods
- toPounds
- toStones

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ian Simmons](https://github.com/isimmons)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
