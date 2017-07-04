<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit\Insurance;

use RoundingWell\Redox\AbstractMessage;
class Plan extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $ID;
    /**
     * @var string|null
     */
    public $IDType;
    /**
     * @var string|null
     */
    public $Name;
}