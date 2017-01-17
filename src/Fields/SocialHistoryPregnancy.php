<?php

namespace RoundingWell\Redox\Fields;

class SocialHistoryPregnancy extends AbstractField
{
    /**
     * @var \DateTime
     */
    public $StartDate;

    /**
     * @var \DateTime|null
     */
    public $EndDate;

    /**
     * @var \DateTime|null
     */
    public $EstimatedDelivery;
}
