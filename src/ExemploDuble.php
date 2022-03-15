<?php

namespace Exemplos;

class ExemploDuble
{
    private $imaginaria;
    public function __construct(InterfaceImaginaria $imaginaria)
    {
        $this->imaginaria = $imaginaria;
    }

    public function testeComDuble()
    {
        /*
         * Imagine alguma lógica mirabolante aqui
         */
        return $this->imaginaria->fazerAlgumaCoisa();
    }
}
