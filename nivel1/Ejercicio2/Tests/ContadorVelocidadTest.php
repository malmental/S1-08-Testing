<?php

namespace Ejercicio2\Tests;

use PHPUnit\Framework\TestCase;
use Ejercicio2\ContadorVelocidad;

class ContadorVelocidadTest extends TestCase
{
    protected $contador;

    protected function setUp(): void
    {
        $this->contador = new ContadorVelocidad(80);
    }

    public function testMuyLento()
    {
        $this->assertEquals("Muy lento", $this->contador->getUmbral(20));
    }

    public function testVelocidadAdecuada()
    {
        $this->assertEquals("Velocidad adecuada", $this->contador->getUmbral(50));
    }

    public function testExcesoLeve()
    {
        $this->assertEquals("Exceso leve", $this->contador->getUmbral(79));
    }

    public function testExcesoModerado()
    {
        $this->assertEquals("Esceso moderado", $this->contador->getUmbral(90));
    }

    public function testExcesoGrave()   
    {
        $this->assertEquals("Exceso grave", $this->contador->getUmbral(120));
    }
}