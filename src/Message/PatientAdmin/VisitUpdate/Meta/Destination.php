<?php

namespace RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Meta;

use RoundingWell\Redox\AbstractMessage;
class Destination extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $ID;
    /**
     * @var string|null
     */
    public $Name;
}