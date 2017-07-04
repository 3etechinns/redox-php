<?php

namespace RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\AttendingProvider;

use RoundingWell\Redox\AbstractMessage;
class PhoneNumber extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Office;
}