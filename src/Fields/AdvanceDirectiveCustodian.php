<?php

namespace RoundingWell\Redox\Fields;

class AdvanceDirectiveCustodian extends AbstractField
{
    /**
     * @var string
     */
    public $FirstName;

    /**
     * @var string
     */
    public $LastName;

    /**
     * @var string
     */
    public $Credentials;

    /**
     * @var AdvanceDirectiveCustodianAddress
     */
    public $Address;
}
