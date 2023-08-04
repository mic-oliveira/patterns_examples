<?php

namespace App\Patterns\Behavior\ChainOfReponsability\Interface;

interface HandlerInterface
{
    // retorno tipado da interface
    public function handle(int $value): mixed;

    // define o tipo que será recebido no next deve ser obedecer o contrato de handler interface
    public function next(HandlerInterface $handler): HandlerInterface;
}
