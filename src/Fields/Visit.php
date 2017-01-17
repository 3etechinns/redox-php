<?php

namespace RoundingWell\Redox\Fields;

class Visit extends AbstractField
{
    /**
     * @var Location
     */
    public $Location;

    /**
     * @var \DateTime
     */
    public $StartDateTime;

    /**
     * @var string
     */
    public $Reason;

    /**
     * @var \DateTime
     */
    public $EndDateTime;
}
