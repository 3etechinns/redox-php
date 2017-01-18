<?php

namespace RoundingWell\Redox\Fields;

class HeaderPatient extends AbstractField
{
    /**
     * @var HeaderPatientIdentifier[]
     */
    public $Identifiers;

    /**
     * @var HeaderPatientDemographics
     */
    public $Demographics;
}
