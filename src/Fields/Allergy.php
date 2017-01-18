<?php

namespace RoundingWell\Redox\Fields;

class Allergy extends AbstractField
{
    /**
     * @var AllergyType
     */
    public $Type;

    /**
     * @var AllergySubstance
     */
    public $Substance;

    /**
     * @var AllergyReaction[]
     */
    public $Reaction;

    /**
     * @var AllergySeverity
     */
    public $Severity;

    /**
     * @var AllergyStatus
     */
    public $Status;

    /**
     * @var \DateTime|null
     */
    public $StartDate;

    /**
     * @var \DateTime|null
     */
    public $EndDate;
}
