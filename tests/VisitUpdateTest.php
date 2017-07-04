<?php

namespace RoundingWell\Redox\Messages\PatientAdmin;

use RoundingWell\Redox\MessageTestCase;
use RoundingWell\Redox\Message\PatientAdmin\VisitUpdate;

class VisitUpdateTest extends MessageTestCase
{
    protected function sampleFile()
    {
        return $this->samplePath() . strtolower('/PatientAdmin/VisitUpdate.json');
    }

    protected function messageClass()
    {
        return VisitUpdate::class;
    }
}
