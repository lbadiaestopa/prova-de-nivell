<?php

require_once __DIR__ . '/Country.php';

class Olympics
{
    private array $countries = [];

    public function addCountries(Country $country): void {
        $this->countries[] = $country;
    }

    public function getCountryWithMostMedals(string $prize): string
    {
        if (empty($this->countries)) {
            return 'No countries Available';
        }

        $hasMoreMedals = null;

        foreach ($this->countries as $country) {
            if ($hasMoreMedals === null || $country->getPrizes($prize) > $hasMoreMedals->getPrizes($prize)) {
                $hasMoreMedals = $country;
            }
        }

        return $hasMoreMedals->getName();
    }

    public function getPrizesByCountry(Country $country): Country
    {
        return $country;
    }
}
