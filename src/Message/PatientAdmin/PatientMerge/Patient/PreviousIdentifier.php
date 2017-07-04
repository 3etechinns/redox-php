<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PatientMerge\Patient;

use RoundingWell\Redox\AbstractMessage;
class PreviousIdentifier extends AbstractMessage
{
    /**
     * @var string
     */
    public $ID;
    /**
     * @var string
     */
    public $IDType;
}