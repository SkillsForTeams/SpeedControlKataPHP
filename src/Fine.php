<?php
namespace SpeedControlKata;

class Fine{
    public int $feeAmount;
    public int $points;
    public int $withdrawMonth;

    public function __construct(int $feeAmount, int $points, int $withdrawMonth)
    {
        $this->feeAmount = $feeAmount;
        $this->points = $points;
        $this->withdrawMonth = $withdrawMonth;
    }
}