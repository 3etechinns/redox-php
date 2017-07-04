<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit;

use RoundingWell\Redox\AbstractMessage;
class PreviousLocation extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Type;
    /**
     * @var string|null
     */
    public $Facility;
    /**
     * @var string|null
     */
    public $Department;
    /**
     * @var string|null
     */
    public $Room;
    /**
     * @var string|null
     */
    public $Bed;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\PreviousLocation\Address
     */
    public $Address;
}