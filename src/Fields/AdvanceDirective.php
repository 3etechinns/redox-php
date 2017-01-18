<?php

namespace RoundingWell\Redox\Fields;

class AdvanceDirective extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var AdvanceDirectiveType
     */
    public $Type;

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
     * @var AdvanceDirectiveVerifier[]
     */
    public $VerifiedBy;

    /**
     * @var AdvanceDirectiveCustodian[]
     */
    public $Custodians;
}
