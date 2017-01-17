<?php

namespace RoundingWell\Redox\Fields;

use RoundingWell\Redox\RedoxInterface;
use RoundingWell\Redox\Traits\CanBeConvertedToArray;
use RoundingWell\Redox\Traits\CanBeConvertedToJson;

abstract class AbstractField implements RedoxInterface
{
    use CanBeConvertedToArray;
    use CanBeConvertedToJson;
}
