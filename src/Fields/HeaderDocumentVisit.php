<?php

namespace RoundingWell\Redox\Fields;

class HeaderDocumentVisit extends AbstractField
{
    /**
     * @var HeaderDocumentVisitLocation
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
