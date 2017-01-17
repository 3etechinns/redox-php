<?php

namespace RoundingWell\Redox\Fields;

class Allergy extends AbstractField
{
    /**
     * @var Code
     */
    public $Type;

    /**
     * @var Code
     */
    public $Substance;

    /**
     * @var Code[]
     */
    public $Reaction;

    /**
     * @var Code
     */
    public $Severity;

    /**
     * @var Code
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
