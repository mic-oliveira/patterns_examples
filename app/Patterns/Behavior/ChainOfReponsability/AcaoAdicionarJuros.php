<?php

namespace App\Patterns\Behavior\ChainOfReponsability;

use App\Patterns\Behavior\ChainOfReponsability\Interface\HandlerInterface;

class AcaoAdicionarJuros extends Handler
{
    /**
     * @param $value
     * @return mixed
     */
    public function handle($value): mixed
    {
        // Implementação da lógica que chama o handler
        if ($value > 20){
            print 'adiciona do 5 de juros ao valor';
            return $value +=5;
        }
        return parent::handle($value);
    }

}