<?php

namespace RoundingWell\Redox\Fields;

use DateTimeInterface;
use DateTimeZone;

abstract class AbstractProcedureField extends AbstractField
{
    /**
     * Format a timestamp as a date.
     *
     * @param DateTimeInterface $date
     * @return string
     */
    protected function formatTimestamp(DateTimeInterface $date)
    {
        return $date->format('Ymd');
    }
}
