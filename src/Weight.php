<?php

namespace Isimmons\WeightConversions;

class Weight
{
    protected float $amount;
    protected string $unit;

    public function __construct(float $amount, string $unit)
    {
        $this->amount = $amount;
        $this->unit = $unit;
    }

    public static function kilograms(float $amount): static
    {
        $myArray = [1, 2, 3];

        return new static($amount, 'Kg');
    }

    public static function grams(float $amount): static
    {
        return new static($amount, 'G');
    }

    public function toPounds(): float
    {
        if ($this->unit === 'Kg') {
            return round($this->amount * 2.2046, 2);
        } elseif ($this->unit === 'G') {
            return round($this->amount / 453.6, 2);
        }
    }
}
