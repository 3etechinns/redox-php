<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PreAdmit\Patient\Demographics;

use RoundingWell\Redox\AbstractMessage;
class PhoneNumber extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $Home;
    /**
     * @var string|null
     */
    public $Office;
    /**
     * @var string|null
     */
    public $Mobile;
}