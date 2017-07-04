<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\Guarantor;

use RoundingWell\Redox\AbstractMessage;
class PhoneNumber extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Home;
    /**
     * @var string|null
     */
    public $Business;
}