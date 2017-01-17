<?php

namespace RoundingWell\Redox\Fields;

class Meta extends AbstractField
{
    /**
     * @var string
     */
    public $DataModel;

    /**
     * @var string
     */
    public $EventType;

    /**
     * @var \DateTime|null
     */
    public $EventDateTime;

    /**
     * @var boolean|null
     */
    public $Test;

    /**
     * @var Source|null
     */
    public $Source;

    /**
     * @var Message|null
     */
    public $Message;

    /**
     * @var Transmission|null
     */
    public $Transmission;
}
