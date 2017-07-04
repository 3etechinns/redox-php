<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Cancel\Meta;

use RoundingWell\Redox\AbstractMessage;
class Source extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $ID;
    /**
     * @var string|null
     */
    public $Name;
}