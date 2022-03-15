<?php

use Exemplos\ExemploUnitario;
use PHPUnit\Framework\TestCase;

class ExemploUnitarioTest extends TestCase
{
    public function test_somar()
    {
        $exemplo = new ExemploUnitario();
        $resultado = $exemplo->somar(1, 9);
        $this->assertEquals(10, $resultado);
    }

    public function test_divisao_entre_n_inteiros()
    {
        $exemplo = new ExemploUnitario();
        $resultado = $exemplo->dividir(2, 2);
        $this->assertEquals(1, $resultado);
    }

    public function test_dividir_por_0()
    {
        $exemplo = new ExemploUnitario();
        $this->expectException(DivisionByZeroError::class);
        $exemplo->dividir(10, 0);
    }
}
