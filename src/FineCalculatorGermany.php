<?php
namespace SpeedControlKata;

class FineCalculatorGermany {

    public function getFine(int $allowedSpeed, int $actualSpeed, bool $isInCity)
    {
        return new Fine(0,0,0);
    }

}
