# Redox for PHP

PHP mappings for [Redox Engine](https://www.redoxengine.com/).

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
