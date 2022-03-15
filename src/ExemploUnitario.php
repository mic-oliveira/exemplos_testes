<?php

namespace Exemplos;

class ExemploUnitario
{
    public function somar(int $n1, $n2): int
    {
        return $n1 + $n2;
    }

    public function dividir(int $n1, int $n2): float|int
    {
        return $n1 / $n2;
    }
}
