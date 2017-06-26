<?php

namespace RoundingWell\Redox\Generator\Hooks;

class DateTimeHook implements Hook
{
    /**
     * @var string[]
     */
    private $fields = [
        'Meta.EventDateTime',
        'Patient.Demographics.DeathDateTime',
        'Visit.VisitDateTime',
    ];

    public function accepts($key)
    {
        return in_array($key, $this->fields);
    }

    public function type()
    {
        return '\DateTime';
    }
}
