<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit;

use RoundingWell\Redox\AbstractMessage;
class DischargeStatus extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Code;
    /**
     * @var string|null
     */
    public $Codeset;
    /**
     * @var string|null
     */
    public $Description;
}