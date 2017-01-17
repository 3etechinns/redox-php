<?php

namespace RoundingWell\Redox\Fields;

class SocialHistory extends AbstractField
{
    /**
     * @var SocialHistoryObservation[]
     */
    public $Observations;

    /**
     * @var SocialHistoryPregnancy[]
     */
    public $Pregnancy;

    /**
     * @var SocialHistoryTobaccoUse[]
     */
    public $TobaccoUse;
}
