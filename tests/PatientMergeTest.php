<?php

namespace RoundingWell\Redox\Messages\PatientAdmin;

use RoundingWell\Redox\MessageTestCase;
use RoundingWell\Redox\Message\PatientAdmin\PatientMerge;

class PatientMergeTest extends MessageTestCase
{
    protected function sampleFile()
    {
        return $this->samplePath() . strtolower('/PatientAdmin/PatientMerge.json');
    }

    protected function messageClass()
    {
        return PatientMerge::class;
    }
}
