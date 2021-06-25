<?php 
namespace SpeedControlKata\Tests; 

use PHPUnit\Framework\TestCase;
use SpeedControlKata\FineCalculatorGermany; 
use SpeedControlKata\Fine;

class FineCalculatorGermanyTest extends TestCase {

    public function testZeroKmh() {
        $fine = new Fine(0,0,0, '');
        $fineCalculator = new FineCalculatorGermany();
        $fine = $fineCalculator->getFine(0,0,false, '');
        $this->assertEquals(0, $fine->feeAmount);
    }
    /**
     * $feedback ist das der richtige weg ?c
     * $fine wird doch überschrieben ? hat es überhaupt eine function
     */
    public function testmaxKmh() {
        $feedback = 'ist ein test';
        $fine = new Fine(680,3,3, $feedback);
        $fineCalculator = new FineCalculatorGermany();
        $fine = $fineCalculator->getFine(80,200,true);
        $this->assertEquals(680, $fine->feeAmount);
    }

    /**
     * Das man bei null nix bezahlen muss
     */
    public function testminKmh() {
        $feedback = 'ist ein test';
        $fine = new Fine(0,0,0, $feedback);
        $fineCalculator = new FineCalculatorGermany();
        $fine = $fineCalculator->getFine(80,80,true);
        $this->assertEquals(0, $fine->feeAmount);
    }
}