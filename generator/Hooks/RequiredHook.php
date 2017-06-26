<?php

namespace RoundingWell\Redox\Generator\Hooks;

class RequiredHook implements Hook
{
    /**
     * @var string[]
     */
    private $fields = [
        'Meta.DataModel',
        'Meta.EventType',
        'Patient.Identifier.ID',
        'Patient.Identifier.IDType',
        'Patient.PreviousIdentifier.ID',
        'Patient.PreviousIdentifiers.IDType',
        'Visit.PatientClass',
    ];

    public function accepts($model, $key)
    {
        return !in_array($key, $this->fields);
    }

    public function type($hint)
    {
        // Skip array type hints
        if (substr($hint, -2) === '[]') {
            return $hint;
        }

        // Skip field type hints
        if (strpos($hint, '\\RoundingWell\\Redox') === 0) {
            return $hint;
        }

        return "$hint|null";
    }
}
