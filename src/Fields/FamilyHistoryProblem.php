<?php

namespace RoundingWell\Redox\Fields;

class FamilyHistoryProblem extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var FamilyHistoryProblemType
     */
    public $Type;

    /**
     * @var \DateTime|null
     */
    public $DateTime;

    /**
     * @var string|null
     */
    public $AgeAtOnset;

    /**
     * @var boolean|null
     */
    public $IsCauseOfDeath;
}
