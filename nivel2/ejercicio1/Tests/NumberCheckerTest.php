<?php

namespace nivel2\ejercicio1\tests;

use nivel2\ejercicio1\NumberChecker;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase
{
    public static function evenCases(): array
    {
        return [
            [2, true],
            [4, true],
            [6, true],
            [3, false],
            [0, false],
            [7, false],
        ];
    }

    #[DataProvider('evenCases')]
    public function testIsEven($number, $expected)
    {
        $checker = new NumberChecker($number);
        $this->assertEquals($expected, $checker->isEven());
    }
}