<?php

namespace RoundingWell\Redox\Fields;

class SocialHistoryTobaccoUse extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var \DateTime|null
     */
    public $StartDate;

    /**
     * @var \DateTime|null
     */
    public $EndDate;
}
