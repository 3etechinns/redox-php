<?php

namespace RoundingWell\Redox;

class PushMessage extends AbstractMessage
{
    /**
     * @var Fields\Meta
     */
    public $Meta;

    /**
     * @var Fields\Header
     */
    public $Header;

    /**
     * @var Fields\AdvanceDirective[]
     */
    public $AdvanceDirectives;

    /**
     * @var Fields\Allergy[]
     */
    public $Allergies;

    /**
     * @var Fields\Encounter[]
     */
    public $Encounters;

    /**
     * @var Fields\FamilyHistory[]
     */
    public $FamilyHistory;

    /**
     * @var Fields\Immunization[]
     */
    public $Immunizations;

    /**
     * @var Fields\MedicalEquipment[]
     */
    public $MedicalEquipment;

    /**
     * @var Fields\Medication[]
     */
    public $Medications;

    /**
     * @var Fields\PlanOfCare
     */
    public $PlanOfCare;

    /**
     * @var Fields\Problem[]
     */
    public $Problems;

    /**
     * @var Fields\Procedure
     */
    public $Procedures;

    /**
     * @var Fields\Result[]
     */
    public $Results;

    /**
     * @var Fields\SocialHistory
     */
    public $SocialHistory;

    /**
     * @var Fields\VitalSign[]
     */
    public $VitalSigns;
}
