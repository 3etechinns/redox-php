<?php

namespace RoundingWell\Redox\Fields;

class RelationProblem extends Code
{
    /**
     * @var Code
     */
    public $Type;

    /**
     * @var \DateTime|null
     */
    public $DateTime;

    /**
     * @var string
     */
    public $AgeAtOnset;

    /**
     * @var boolean|null
     */
    public $IsCauseOfDeath;
}
