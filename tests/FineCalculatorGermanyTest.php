<?php 
namespace SpeedControlKata\Tests; 

use PHPUnit\Framework\TestCase;
use SpeedControlKata\FineCalculatorGermany; 
use SpeedControlKata\Fine;

class FineCalculatorGermanyTest extends TestCase {
    public function testZeroKmh() {
        $fine = new Fine(0,0,0);
        $fineCalculator = new FineCalculatorGermany(); 
        $fine = $fineCalculator->getFine(0,0,false);
        $this->assertEquals(0, $fine->feeAmount);
    }

}