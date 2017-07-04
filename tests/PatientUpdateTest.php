<?php

namespace RoundingWell\Redox\Messages\PatientAdmin;

use RoundingWell\Redox\MessageTestCase;
use RoundingWell\Redox\Message\PatientAdmin\PatientUpdate;

class PatientUpdateTest extends MessageTestCase
{
    protected function sampleFile()
    {
        return $this->samplePath() . strtolower('/PatientAdmin/PatientUpdate.json');
    }

    protected function messageClass()
    {
        return PatientUpdate::class;
    }
}
