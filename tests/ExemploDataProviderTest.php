<?php

use Exemplos\ExemploUnitario;
use PHPUnit\Framework\TestCase;

class ExemploDataProviderTest extends TestCase
{
    /**
     * @param $n1
     * @param $n2
     * @param $soma
     * @return void
     * @dataProvider soma
     */
    public function test_data_provider($n1, $n2, $soma)
    {
        $exemplo = new ExemploUnitario();
        $resultado = $exemplo->somar($n1, $n2);
        $this->assertEquals($soma, $resultado);
    }

    public function soma(): array
    {
        return [
            [3,7,10],
            [2,3,5],
            [1,1,2],
            [2,5,8],
        ];
    }
}
