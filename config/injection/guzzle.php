<?php

use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\FlysystemStorage;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use League\Flysystem\Adapter\Local;

$cacheDir = '/tmp/redox-php-cache';
$baseUri = 'https://developer.redoxengine.com/data-models/schema/';

if (!is_dir($cacheDir)) {
    mkdir($cacheDir);
}

$storage = new FlysystemStorage(new Local($cacheDir));
$strategy = new PrivateCacheStrategy($storage);
$middleware = new CacheMiddleware($strategy);

$stack = HandlerStack::create();
$stack->push(new CacheMiddleware($strategy), 'cache');

return new Client([
    'handler' => $stack,
    'base_uri' => $baseUri,
]);
