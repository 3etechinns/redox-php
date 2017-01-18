# Redox for PHP

[![Latest Stable Version](https://img.shields.io/packagist/v/rwos/redox.svg)](https://packagist.org/packages/rwos/redox)
[![License](https://img.shields.io/packagist/l/rwos/redox.svg)](https://github.com/RoundingWellOS/redox-php/blob/master/LICENSE)
[![Build Status](https://travis-ci.org/RoundingWellOS/redox-php.svg)](https://travis-ci.org/RoundingWellOS/redox-php)
[![Code Coverage](https://scrutinizer-ci.com/g/RoundingWellOS/redox-php/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/RoundingWellOS/redox-php/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/RoundingWellOS/redox-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/RoundingWellOS/redox-php/?branch=master)

PHP mappings for [Redox Engine](https://www.redoxengine.com/). Attempts to be
[PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/),
and [PSR-4](http://www.php-fig.org/psr/psr-2/) compliant.

## Installation

```
composer require rwos/redox
```

## Usage

```php
use RoundingWell\Redox\PushMessage;

// Using a file path
$push = PushMessage::fromFile($path);

// Using a JSON string
$push = PushMessage::fromString($json);

// Using decoded JSON data
$push = PushMessage::fromObject($data);
```

Once created, the entire Redox document structure will be available:

```php
$patientFirstName = $push->Header->Patient->Demographics->FirstName;

foreach ($push->Allergies as $allergy) {
    echo "$patientFirstName is allergic to ", $allergy->Substance->Name, "\n";
}
```

Refer the [Redox data models](https://app.redoxengine.com/#/docs/datamodels/) for
a complete reference of available fields.
