<?php

namespace RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\AttendingProvider;

use RoundingWell\Redox\AbstractMessage;
class Address extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $StreetAddress;
    /**
     * @var string|null
     */
    public $City;
    /**
     * @var string|null
     */
    public $State;
    /**
     * @var string|null
     */
    public $ZIP;
    /**
     * @var string|null
     */
    public $County;
    /**
     * @var string|null
     */
    public $Country;
}