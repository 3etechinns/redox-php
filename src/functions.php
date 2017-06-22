<?php

namespace RoundingWell\Redox;

use DateTimeInterface;
use DateTimeZone;

/**
 * Convert a time stamp to a date string
 *
 * @return string
 */
function to_date_string(DateTimeInterface $date)
{
    return $date->format('Y-m-d');
}

/**
 * Convert a time stamp to an ISO8601 string
 *
 * @return string
 */
function to_datetime_string(DateTimeInterface $date)
{
    // ISO8601, with microseconds and "Z" for the offset
    return sprintf(
        '%sT%s.%sZ',
        $date->format('Y-m-d'),
        $date->format('H:i:s'),
        substr($date->format('u'), 0, 3)
    );
}

/**
 * @return DateTimeInterface
 */
function to_utc_date(DateTimeInterface $date)
{
    $tz = new DateTimeZone('UTC');
    $date = clone $date;
    return $date->setTimezone($tz);
}
