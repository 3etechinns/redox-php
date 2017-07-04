<?php

namespace RoundingWell\Redox\Message\PatientAdmin\Discharge\Visit;

use RoundingWell\Redox\AbstractMessage;
class Insurance extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Visit\Insurance\Plan
     */
    public $Plan;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Visit\Insurance\Company
     */
    public $Company;
    /**
     * @var string|null
     */
    public $GroupNumber;
    /**
     * @var string|null
     */
    public $GroupName;
    /**
     * @var string|null
     */
    public $EffectiveDate;
    /**
     * @var string|null
     */
    public $ExpirationDate;
    /**
     * @var string|null
     */
    public $PolicyNumber;
    /**
     * @var string|null
     */
    public $AgreementType;
    /**
     * @var string|null
     */
    public $CoverageType;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\Discharge\Visit\Insurance\Insured
     */
    public $Insured;
}