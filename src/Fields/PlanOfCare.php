<?php

namespace RoundingWell\Redox\Fields;

class PlanOfCare extends AbstractField
{
    /**
     * @var PlanOfCareOrder[]
     */
    public $Orders;

    /**
     * @var PlanOfCareProcedure[]
     */
    public $Procedures;

    /**
     * @var PlanOfCareEncounter[]
     */
    public $Encounters;

    /**
     * @var PlanOfCareMedication[]
     */
    public $MedicationAdministration;

    /**
     * @var PlanOfCareSupply[]
     */
    public $Supplies;

    /**
     * @var PlanOfCareService[]
     */
    public $Services;
}
