<?php

namespace RoundingWell\Redox\Traits;

use DateTimeInterface;
use DateTimeZone;
use RoundingWell\Redox\RedoxInterface;

use function RoundingWell\Redox\to_datetime_string;
use function RoundingWell\Redox\to_utc_date;

trait CanBeConvertedToArray /* implements RedoxInterface */
{
    public function toArray()
    {
        $output = [];
        $custom = $this->customFormatters();

        foreach (get_object_vars($this) as $key => $value) {
            $output[$key] = call_user_func($this->formatterFor($key, $custom), $value);
        }

        return $output;

    }

    /**
     * @return callable
     */
    protected function formatterFor($key, array $custom)
    {
        if (!empty($custom[$key])) {
            return $custom[$key];
        }

        return static function ($value) {
            if ($value instanceof RedoxInterface) {
                return $value->toArray();
            }

            if ($value instanceof DateTimeInterface) {
                return to_datetime_string(to_utc_date($value));
            }

            return $value;
        };
    }

    /**
     * @return array [field => callable, ...]
     */
    protected function customFormatters()
    {
        return [];
    }
}
