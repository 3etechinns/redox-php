<?php

namespace RoundingWell\Redox\Message\PatientAdmin\VisitUpdate;

use RoundingWell\Redox\AbstractMessage;
class Visit extends AbstractMessage
{
    /**
     * @var string|null
     */
    public $VisitNumber;
    /**
     * @var string
     */
    public $PatientClass;
    /**
     * @var string|null
     */
    public $VisitDateTime;
    /**
     * @var string|null
     */
    public $DischargeDateTime;
    /**
     * @var float|null
     */
    public $Duration;
    /**
     * @var string|null
     */
    public $Reason;
    /**
     * @var array|null
     */
    public $Instructions;
    /**
     * @var float|null
     */
    public $Balance;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\AttendingProvider
     */
    public $AttendingProvider;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\ConsultingProvider
     */
    public $ConsultingProvider;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\ReferringProvider
     */
    public $ReferringProvider;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\Location
     */
    public $Location;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\Guarantor
     */
    public $Guarantor;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\VisitUpdate\Visit\Insurance[]
     */
    public $Insurances;
}