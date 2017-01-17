<?php

namespace RoundingWell\Redox\Traits;

use DateTimeInterface;
use DateTimeZone;
use RoundingWell\Redox\RedoxInterface;

trait CanBeConvertedToArray /* implements RedoxInterface */
{
    public function toArray()
    {
        $values = get_object_vars($this);

        return array_map(function ($value) {
            if ($value instanceof RedoxInterface) {
                return $value->toArray();
            }

            if ($value instanceof DateTimeInterface) {
                $value = $this->dateInUtc($value);
                return $this->formatTimestamp($value);
            }

            return $value;
        }, $values);
    }

    /**
     * @param DateTimeInterface $date
     * @return DateTimeInterface
     */
    private function dateInUtc(DateTimeInterface $date)
    {
        $date = clone $date;
        $tz = new DateTimeZone('UTC');
        return $date->setTimezone($tz);
    }

    /**
     * Format a timestamp as ISO8601, with microseconds.
     *
     * @param DateTimeInterface $date
     * @return string
     */
    protected function formatTimestamp(DateTimeInterface $date)
    {
        // ISO8601, with microseconds and "Z" for the offset
        return sprintf(
            '%sT%s.%sZ',
            $date->format('Y-m-d'),
            $date->format('H:i:s'),
            substr($date->format('u'), 0, 3)
        );
    }
}
