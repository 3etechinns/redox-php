<?php

namespace RoundingWell\Redox;

use RoundingWell\Redox\RedoxInterface;
use RoundingWell\Redox\Traits;

abstract class AbstractMessage implements RedoxInterface
{
    use Traits\CanBeConvertedToArray;
    use Traits\CanBeConvertedToJson;
    use Traits\HasNamedConstructors;
}
