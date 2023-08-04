<?php

namespace App\Patterns\Behavior\ChainOfReponsability;

class AdicionarDesconto extends Handler
{
    /**
     * @param $value
     * @return mixed
     */
    public function handle($value): mixed
    {
        if ($value > 100){
            $value -= $value*0.1;
        }
        return parent::handle($value);
    }
}
