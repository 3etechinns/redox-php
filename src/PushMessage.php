<?php

namespace RoundingWell\Redox;

use JsonMapper;

class PushMessage extends AbstractMessage
{
    /**
     * Create a new instance from a file.
     *
     * @param string $path
     * @return static
     */
    public static function fromFile($path)
    {
        $json = \file_get_contents($path);
        return static::fromString($json);
    }

    /**
     * Create a new instance from a JSON string.
     *
     * @param string $json
     * @return static
     */
    public static function fromString($json)
    {
        $object = \json_decode($json);
        return static::fromObject($object);
    }

    /**
     * Create a new instance from an object.
     *
     * @param object $data
     * @return static
     */
    public static function fromObject($data, JsonMapper $mapper = null)
    {
        if (empty($mapper)) {
            $mapper = new JsonMapper();
        }

        return $mapper->map($data, new static());
    }

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
