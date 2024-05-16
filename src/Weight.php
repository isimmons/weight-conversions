<?php

namespace Isimmons\WeightConversions;

class Weight
{
    /**
     * Stores amount of unit to be converted.
     *
     * @var float
     */
    protected float $amount;
    /**
     * Stores the unit of weight being converted.
     *
     * @var string
     */
    protected string $unit;

    /**
     * Create a new instance of class Weight.
     *
     * @param float $amount
     * @param string $unit
     * @return void
     */
    public function __construct(float $amount, string $unit)
    {
        $this->amount = $amount;
        $this->unit = $unit;
    }

    /**
     * Returns a new instance of Weight for specified amount of kilograms.
     *
     * @param float $amount
     * @return static
     */
    public static function kilograms(float $amount): static
    {
        return new static($amount, 'Kg');
    }

    /**
     * Returns a new instance of Weight for specified amount of grams.
     *
     * @param float $amount
     * @return static
     */
    public static function grams(float $amount): static
    {
        return new static($amount, 'G');
    }

    /**
     * Returns result of conversion to pounds.
     *
     * @return float
     */
    public function toPounds(): float
    {
        if ($this->unit === 'Kg') {
            return round($this->amount * 2.2046, 2);
        } elseif ($this->unit === 'G') {
            return round($this->amount / 453.6, 2);
        }
    }

    /**
     * Returns result of conversion to stones.
     *
     * @return float
     */
    public function toStones(): float
    {
        if ($this->unit === 'Kg') {
            return round($this->amount / 6.35029497, 2);
        } elseif ($this->unit === 'G') {
            return round($this->amount / 6350.41595224, 2);
        }
    }
}
