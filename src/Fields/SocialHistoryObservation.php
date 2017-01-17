<?php

namespace RoundingWell\Redox\Fields;

class SocialHistoryObservation extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var SocialHistoryObservationValue
     */
    public $Value;

    /**
     * @var string
     */
    public $ValueText;

    /**
     * @var \DateTime
     */
    public $StartDate;

    /**
     * @var \DateTime|null
     */
    public $EndDate;
}
