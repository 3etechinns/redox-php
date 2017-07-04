<?php

namespace RoundingWell\Redox\Messages\PatientAdmin;

use RoundingWell\Redox\MessageTestCase;
use RoundingWell\Redox\Message\PatientAdmin\PreAdmit;

class PreAdmitTest extends MessageTestCase
{
    protected function sampleFile()
    {
        return $this->samplePath() . strtolower('/PatientAdmin/PreAdmit.json');
    }

    protected function messageClass()
    {
        return PreAdmit::class;
    }
}
