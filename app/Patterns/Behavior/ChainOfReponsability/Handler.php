<?php

namespace App\Patterns\Behavior\ChainOfReponsability;

use App\Models\Boleto;
use App\Patterns\Behavior\ChainOfReponsability\Interface\HandlerInterface;

abstract class Handler implements HandlerInterface
{

    private ?HandlerInterface $next = null;

    /**
     * @param Boleto $boleto
     * @return void
     */
    public function handle(Boleto $boleto): void
    {
        $this->next?->handle($boleto);
    }

    public function next(HandlerInterface $handler): HandlerInterface
    {
        $this->next = $handler;
        return $this->next;
    }
}