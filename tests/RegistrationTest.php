<?php

namespace RoundingWell\Redox\Messages\PatientAdmin;

use RoundingWell\Redox\MessageTestCase;
use RoundingWell\Redox\Message\PatientAdmin\Registration;

class RegistrationTest extends MessageTestCase
{
    protected function sampleFile()
    {
        return $this->samplePath() . strtolower('/PatientAdmin/Registration.json');
    }

    protected function messageClass()
    {
        return Registration::class;
    }
}
