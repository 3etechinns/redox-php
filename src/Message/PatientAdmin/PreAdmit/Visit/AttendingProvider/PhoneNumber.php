<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Visit\AttendingProvider;

use RoundingWell\Redox\AbstractMessage;
class PhoneNumber extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Office;
}