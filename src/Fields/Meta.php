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
     * @var MetaSource|null
     */
    public $Source;

    /**
     * @var MetaMessage|null
     */
    public $Message;

    /**
     * @var MetaTransmission|null
     */
    public $Transmission;
}
