<?php

namespace App\Patterns\Behavior\ChainOfReponsability;

use App\Patterns\Behavior\ChainOfReponsability\Interface\HandlerInterface;

class AdicionarJuros extends Handler
{
    /**
     * @param $value
     * @return mixed
     */
    public function handle($value): mixed
    {
        // Implementação da lógica que chama o handler
        if ($value > 20){
            print 'adiciona ao valor por 5 de juros';
            $value +=5;
        }
        dump($value);
        return parent::handle($value);
    }

}