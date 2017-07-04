<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Cancel\Patient;

use RoundingWell\Redox\AbstractMessage;
class Diagnosis extends AbstractMessage
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
    public $Name;
    /**
     * @var string|null
     */
    public $Type;
}