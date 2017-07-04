<?php

namespace RoundingWell\Redox\Messages\PatientAdmin;

use RoundingWell\Redox\MessageTestCase;
use RoundingWell\Redox\Message\PatientAdmin\Transfer;

class TransferTest extends MessageTestCase
{
    protected function sampleFile()
    {
        return $this->samplePath() . strtolower('/PatientAdmin/Transfer.json');
    }

    protected function messageClass()
    {
        return Transfer::class;
    }
}
