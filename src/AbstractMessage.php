<?php

namespace RoundingWell\Redox;

abstract class AbstractMessage implements RedoxInterface
{
    use Traits\CanBeConvertedToArray;
    use Traits\CanBeConvertedToJson;
    use Traits\HasNamedConstructors;
}
