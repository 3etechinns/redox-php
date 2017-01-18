<?php

namespace RoundingWell\Redox\Fields;

class AdvanceDirectiveCustodian extends AbstractField
{
    /**
     * @var string|null
     */
    public $FirstName;

    /**
     * @var string|null
     */
    public $LastName;

    /**
     * @var string|null
     */
    public $Credentials;

    /**
     * @var AdvanceDirectiveCustodianAddress|null
     */
    public $Address;
}
