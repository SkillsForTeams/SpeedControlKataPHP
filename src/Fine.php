<?php
namespace SpeedControlKata;

class Fine{
    public int $feeAmount;
    public int $points;
    public int $withdrawMonth;
    public string $feedback;


    public function __construct(int $feeAmount, int $points, int $withdrawMonth, string $feedback)
    {
        $this->feeAmount = $feeAmount;
        $this->points = $points;
        $this->withdrawMonth = $withdrawMonth;
        $this->feedback = $feedback;
    }
}