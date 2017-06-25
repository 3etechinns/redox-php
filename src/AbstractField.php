<?php

namespace RoundingWell\Redox;

abstract class AbstractField implements RedoxInterface
{
    use Traits\CanBeConvertedToArray;
    use Traits\CanBeConvertedToJson;
}
