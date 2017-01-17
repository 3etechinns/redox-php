<?php

namespace RoundingWell\Redox\Fields;

class SocialHistoryTobaccoUse extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var \DateTime
     */
    public $StartDate;

    /**
     * @var \DateTime|null
     */
    public $EndDate;
}
