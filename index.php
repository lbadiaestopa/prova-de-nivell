<?php

require_once __DIR__ . '/Country.php';
require_once __DIR__ . '/Olympics.php';

$olympics = new Olympics;

$countries = [
    new Country("Spain", 5, 7, 6, 10),
    new Country("USA", 12, 10, 8, 15),
    new Country("China", 10, 8, 6, 12),
    new Country("Germany", 6, 5, 7, 9),
    new Country("Japan", 7, 6, 5, 11)
];

foreach ($countries as $country) {
    $olympics->addCountries($country);
}

echo $olympics->getCountryWithMostMedals(PrizeType::SILVER->value) . PHP_EOL;
echo $olympics->getPrizesByCountry($countries[2]);



