<?php

namespace App\Patterns\Behavior\ChainOfReponsability;

use App\Patterns\Behavior\ChainOfReponsability\Interface\HandlerInterface;

abstract class Handler implements HandlerInterface
{

    private ?HandlerInterface $next = null;

    /**
     * @param $value
     * @return mixed
     */
    public function handle($value): mixed
    {
        dump($value);
        return $this->next?->handle($value);
    }

    public function next(HandlerInterface $handler): HandlerInterface
    {
        $this->next = $handler;
        return $this->next;
    }
}