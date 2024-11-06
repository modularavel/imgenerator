# This is my package image

[![Latest Version on Packagist](https://img.shields.io/packagist/v/modularavel/image.svg?style=flat-square)](https://packagist.org/packages/modularavel/image)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/modularavel/image/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/modularavel/image/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/modularavel/image/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/modularavel/image/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/modularavel/image.svg?style=flat-square)](https://packagist.org/packages/modularavel/image)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/image.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/image)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require modularavel/image
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="image-config"
```

This is the contents of the published config file:

```php
return [
    'source' => [
        'filesystem' => env('IMAGE_SOURCE_FILESYSTEM', 'public'), // Options: "local", "public", "s3"
    ],
    'cache' => [
        'folder' => env('IMAGE_CACHE_FOLDER', '/cache'),
        'prefix' => env('IMAGE_CACHE_PREFIX', 'cache_'),
        'filesystem' => env('IMAGE_CACHE_FILESYSTEM', 'local'), // Options: "local", "public", "s3"
    ],
    'allow_external_sites' => env('IMAGE_ALLOW_EXTERNAL_SITES', true),
    'allow_all_external_sites' => env('IMAGE_ALLOW_ALL_EXTERNAL_SITES', true),
    'allowed_external_hosts' => env('IMAGE_ALLOWED_EXTERNAL_HOSTS', [
        'facebook.com',
        'img.youtube.com',
        'upload.wikimedia.org',
        'imgur.com',
        'amazonaws.com',
    ]),
];

```

## Usage

##### Add this to your .env file

```dotenv
# local | s3 | public
IMAGE_SOURCE_FILESYSTEM=s3
```

```html
<img src="/img?path=uploads/avatar.jpg&w=200&h=200&q=95&fs=s3" alt="My cached image from filesystem: s3" />
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Casimiro Rocha](https://github.com/casimirorocha)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
