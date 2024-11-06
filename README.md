# modularavel/image

Dynamicly image resize by url parameters... fast and easy to use and/or customize.

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
