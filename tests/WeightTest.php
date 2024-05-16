<?php

use Isimmons\WeightConversions\Weight;

it('can convert kilograms to pounds correctly', function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});

it('can convert grams to pounds correctly', function () {
    $pounds = Weight::grams(100)->toPounds();

    expect($pounds)->toEqual(0.22);
});
