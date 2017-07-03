<?php

require __DIR__ . '/../vendor/autoload.php';

use RoundingWell\Redox\Message\PatientAdmin\Arrival;

$file = __DIR__ . '/../samples/patientadmin/arrival.json';
$json = json_decode(file_get_contents($file));

$mapper = new JsonMapper();
$arrival = $mapper->map($json, new Arrival());

print_r($arrival);exit;

// Once the message is constructed, it can be accessed as an object:
var_dump($arrival->Patient->Demographics->FirstName);
var_dump($arrival->Patient->Demographics->LastName);

// Or converted to an array:
// var_dump($arrival->toArray());

// Or converted to JSON:
// var_dump(json_encode($arrival));

// Or converted back from JSON:
print_r(json_decode(json_encode($arrival)));
