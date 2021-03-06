<?php

use Exemplos\ClasseA;
use Exemplos\ClasseB;
use Exemplos\ExemploDuble;
use PHPUnit\Framework\TestCase;

class ExemploDubleTest extends TestCase
{
    public function test_duble_de_teste()
    {
        // exemplo de instância de objeto com injeção de dependência
        $classeB = new ClasseB(new ClasseA());
        // exemplo de duble da classe B
        $classeB = $this->createMock(ClasseB::class);
        $classeB->method('fazerAlgumaCoisa')->willReturn('Duble que retorna o método com o valor esperado');
        $exemploDuble = new ExemploDuble($classeB);
        $result = $exemploDuble->testeComDuble();
        $this->assertEquals('Duble que retorna o método com o valor esperado', $result);
    }
}
