<?php

namespace RoundingWell\Redox\Messages\PatientAdmin;

use RoundingWell\Redox\MessageTestCase;
use RoundingWell\Redox\Message\PatientAdmin\Arrival;

class ArrivalTest extends MessageTestCase
{
    protected function sampleFile()
    {
        return $this->samplePath() . strtolower('/PatientAdmin/Arrival.json');
    }

    protected function messageClass()
    {
        return Arrival::class;
    }
}
