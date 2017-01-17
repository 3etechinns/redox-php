# Redox for PHP

PHP mappings for [Redox Engine](https://www.redoxengine.com/).

## Installation

```
composer require rwos/redox
```

## Usage

```php
use RoundingWell\Redox\Push;

// Using a file path
$push = Push::fromFile($path);

// Using a JSON string
$push = Push::fromString($json);

// Using decoded JSON data
$push = Push::fromObject($data);
```
