<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Cancel\Visit\Guarantor;

use RoundingWell\Redox\AbstractMessage;
class Spouse extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $FirstName;
    /**
     * @var string|null
     */
    public $LastName;
}