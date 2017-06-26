<?php

namespace RoundingWell\Redox\Generator\Hooks;

interface Hook
{
    /**
     * @param string $key
     * @return bool
     */
    public function accepts($key);

    /**
     * @return string
     */
    public function type();
}
