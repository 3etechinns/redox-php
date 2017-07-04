<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\ConsultingProvider;

use RoundingWell\Redox\AbstractMessage;
class Location extends AbstractMessage
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
}