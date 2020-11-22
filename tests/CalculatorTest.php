<?php

use App\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    protected $calculator;

    public function setUp(): void
    {
        $this->calculator = new \App\Calculator();
        parent::setUp();
    }

    public function testAdd(){
        $this->assertEquals(7,$this->calculator->add(0,7));
    }
    public function testDivide(){
        $this->assertEquals(7,$this->calculator->divide(49,7));
    }
    public function testSubstract(){
        $this->assertEquals(7,$this->calculator->subtract(14,7));
    }
    public function testMultiply(){
        $this->assertEquals(7,$this->calculator->multiply(3.5,2));
    }

}