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

it('can convert kilograms to stones correctly', function () {
    $stones = Weight::kilograms(100)->toStones();

    expect($stones)->toEqual(15.75);
});

it('can convert grams to stones correctly', function () {
    $stones = Weight::grams(100)->toStones();

    expect($stones)->toEqual(0.02);
});
