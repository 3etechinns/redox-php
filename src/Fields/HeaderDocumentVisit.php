<?php

namespace RoundingWell\Redox\Fields;

class HeaderDocumentVisit extends AbstractField
{
    /**
     * @var HeaderDocumentVisitLocation
     */
    public $Location;

    /**
     * @var \DateTime|null
     */
    public $StartDateTime;

    /**
     * @var string|null
     */
    public $Reason;

    /**
     * @var \DateTime|null
     */
    public $EndDateTime;
}
