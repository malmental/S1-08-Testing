<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Orlandorojas\S108Testing\NumberChecker;


class NumberCheckerTest extends TestCase
{

    private $numberChecker; // Instanciamos la clase

    protected function setUp(): void
    {
        $this->numberChecker = new NumberChecker(3);
    }

    public function testIsEven()
    {
        $number = new NumberChecker(2);
        $this->assertTrue($number->isEven());
    }

    public function testIsPositive()
    {
        $number = new NumberChecker(3);
        $this->assertTrue($number->isPositive());
    }

}

?>