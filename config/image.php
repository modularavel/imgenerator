<?php

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
        'daddybrasil.s3-sa-east-1.amazonaws.com',
        'daddybrasilapp.test',
        'dynamic-img.test'
    ]),
];
