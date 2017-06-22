<?php

namespace RoundingWell\Redox\Fields;

use DateTimeInterface;

abstract class AbstractProcedureField extends AbstractField
{
    protected function customFormatters()
    {
        return [
            'DateTime' => static function (DateTimeInterface $date) {
                return $date->format('Ymd');
            },
        ];
    }
}
