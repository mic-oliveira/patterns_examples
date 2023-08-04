<?php

namespace App\Patterns\Behavior\ChainOfReponsability;

class AcaoCalcularDesconto extends Handler
{
    /**
     * @param $value
     * @return mixed
     */
    public function handle($value): mixed
    {

        if ($value > 100){
            echo 'desconta do 10% de juros ao valor';
            $value -= $value*0.1;
        }
        return parent::handle($value);

    }

}