<?php

namespace RoundingWell\Redox;

use RoundingWell\Redox\RedoxInterface;
use RoundingWell\Redox\Traits\CanBeConvertedToArray;
use RoundingWell\Redox\Traits\CanBeConvertedToJson;

abstract class AbstractMessage implements RedoxInterface
{
    use CanBeConvertedToArray;
    use CanBeConvertedToJson;
}
