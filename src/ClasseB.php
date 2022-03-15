<?php

namespace Exemplos;

class ClasseB implements InterfaceImaginaria
{
    private $dependenciaA;

    public function __construct(ClasseA $dependenciaA)
    {
        $this->dependenciaA = $dependenciaA;
    }

    public function fazerAlgumaCoisa(...$arguments): string
    {
        return $this->dependenciaA->fazerAlgumaCoisa().' compoem clase B';
    }
}
