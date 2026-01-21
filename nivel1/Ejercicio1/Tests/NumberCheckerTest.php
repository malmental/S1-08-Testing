<?php

namespace nivel1\Ejercicio1\Tests;

use PHPUnit\Framework\TestCase;
use nivel1\Ejercicio1\NumberChecker;


class NumberCheckerTest extends TestCase
{
    public function testIsEven()
    {
        $number = new NumberChecker(4);
        $this->assertTrue($number->isEven());
        $this->assertTrue($number->isPositive());
    }

    public function testIsEvenOdd()
    {
        $number = new NumberChecker(5);
        $this->assertFalse($number->isEven());
        $this->assertTrue($number->isPositive());
    }

    public function testIsNegativeEven()
    {
        $number = new NumberChecker(-4);
        $this->assertTrue($number->isEven());
        $this->assertFalse($number->isPositive());
    }

    public function testIsNegativeOdd()
    {
        $number = new NumberChecker(-3);
        $this->assertFalse($number->isEven());
        $this->assertFalse($number->isPositive());
    }

    public function testByZero()
    {
        $number = new NumberChecker(0);
        $this->assertFalse($number->isEven());
        $this->assertFalse($number->isPositive());
    }

}