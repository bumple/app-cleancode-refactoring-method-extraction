<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        return $this->extracted($radius, $height);
    }

    /**
     * @param $radius
     * @param $height
     * @return float|int
     */
    public function extracted($radius, $height): int|float
    {
        $baseArea = pi() * $radius * $radius;
        $perimeter = 2 * pi() * $radius;
        return $perimeter * $height + 2 * $baseArea;
    }
}