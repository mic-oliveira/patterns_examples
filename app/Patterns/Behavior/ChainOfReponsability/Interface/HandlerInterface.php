<?php

namespace App\Patterns\Behavior\ChainOfReponsability\Interface;

use App\Models\Boleto;

interface HandlerInterface
{
    // retorno tipado da interface
    public function handle(Boleto $boleto): void;

    // define o tipo que será recebido no next deve ser obedecer o contrato de handler interface
    public function next(HandlerInterface $handler): HandlerInterface;
}
