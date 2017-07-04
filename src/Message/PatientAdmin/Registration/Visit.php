<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Registration;

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
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Visit\AttendingProvider
     */
    public $AttendingProvider;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Visit\ConsultingProvider
     */
    public $ConsultingProvider;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Visit\ReferringProvider
     */
    public $ReferringProvider;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Visit\Location
     */
    public $Location;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Visit\Guarantor
     */
    public $Guarantor;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Registration\Visit\Insurance[]
     */
    public $Insurances;
}