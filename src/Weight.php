<?php

namespace Isimmons\WeightConversions;

class Weight
{
    public int $startingWeight = 0;

    public function __construct(int $startingWeight)
    {
        $this->startingWeight = $startingWeight;
    }

    public static function kilograms(int $int): static
    {
        return new static($int);
    }

    public function toPounds(): float
    {
        return $this->startingWeight * 2.2046;
    }
}
