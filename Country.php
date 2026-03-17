<?php

enum PrizeType: string
{
    case GOLD = 'Gold';
    case SILVER = 'Silver';
    case BRONZE = 'Bronze';
    case DIPLOMA = 'Diploma';
}

class Country
{
    private string $name;
    private array $prizes;
    private int $totalPrizes;

    public function __construct(string $name, int $goldMedal, int $silverMedal, int $bronzeMedal, int $diploma)
    {
        $this->name = $name;
        $this->prizes = [
            PrizeType::GOLD->value => $goldMedal,
            PrizeType::SILVER->value => $silverMedal,
            PrizeType::BRONZE->value => $bronzeMedal,
            PrizeType::DIPLOMA->value => $diploma
        ];
        $this->totalPrizes = $goldMedal + $silverMedal + $bronzeMedal + $diploma;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrizes(string $prize): int
    {
        return $this->prizes[$prize];
    }

    public function getTotalPrizes(): int
    {
        return $this->totalPrizes;
    }

    public function __toString(): string
    {
        return "El país " . $this->name . " té " . $this->prizes[PrizeType::GOLD->value] . " medalles d'or, " . $this->prizes[PrizeType::SILVER->value] . " medalles de plata, "
            . $this->prizes[PrizeType::BRONZE->value] . " medalles de bronze i " . $this->prizes[PrizeType::DIPLOMA->value] . " diplomes.";
    }
}
