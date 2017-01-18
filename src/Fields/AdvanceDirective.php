<?php

namespace RoundingWell\Redox\Fields;

class AdvanceDirective extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var AdvanceDirectiveType|null
     */
    public $Type;

    /**
     * @var \DateTime|null
     */
    public $StartDate;

    /**
     * @var \DateTime|null
     */
    public $EndDate;

    /**
     * @var string|null
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
