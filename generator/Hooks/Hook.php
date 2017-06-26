<?php

namespace RoundingWell\Redox\Generator\Hooks;

interface Hook
{
    /**
     * @param string $model
     * @param string $key
     * @return bool
     */
    public function accepts($model, $key);

    /**
     * @param string $hint
     * @return string
     */
    public function type($hint);
}
