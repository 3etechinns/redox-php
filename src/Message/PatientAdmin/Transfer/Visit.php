<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Transfer;

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
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\DischargeStatus
     */
    public $DischargeStatus;
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
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\AttendingProvider
     */
    public $AttendingProvider;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\ConsultingProvider
     */
    public $ConsultingProvider;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\ReferringProvider
     */
    public $ReferringProvider;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\Location
     */
    public $Location;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\PreviousLocation
     */
    public $PreviousLocation;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\Guarantor
     */
    public $Guarantor;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Transfer\Visit\Insurance[]
     */
    public $Insurances;
}