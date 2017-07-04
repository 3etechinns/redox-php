<?php

namespace RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient;

use RoundingWell\Redox\AbstractMessage;
class Insurance extends AbstractMessage
{
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Insurance\Plan
     */
    public $Plan;
    /**
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Insurance\Company
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
     * @var \RoundingWell\Redox\Message\PatientAdmin\PatientUpdate\Patient\Insurance\Insured
     */
    public $Insured;
}