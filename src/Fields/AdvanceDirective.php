<?php

namespace RoundingWell\Redox\Fields;

class AdvanceDirective extends AbstractField
{
    /**
     * @var Code
     */
    public $Type;

    /**
     * @var string
     */
    public $Code;

    /**
     * @var string
     */
    public $CodeSystem;

    /**
     * @var string
     */
    public $CodeSystemName;

    /**
     * @var string
     */
    public $Name;

    /**
     * @var \DateTime
     */
    public $StartDate;

    /**
     * @var \DateTime|null
     */
    public $EndDate;

    /**
     * @var string
     */
    public $ExternalReference;

    /**
     * @var Verifier[]
     */
    public $VerifiedBy;

    /**
     * @var Custodian[]
     */
    public $Custodians;
}
