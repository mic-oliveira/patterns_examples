<?php

namespace App\Patterns\Behavior\ChainOfReponsability;

use App\Models\Boleto;

class AdicionarDesconto extends Handler
{
    /**
     * @param Boleto $boleto
     * @return void
     */
    public function handle(Boleto $boleto): void
    {
        // calculo de data feitos através do Carbon, verificando se a data hoje é maior do que a data de vencimento
        if ($boleto->vencimento->endOfDay()->greaterThanOrEqualTo(now())){
            // adiciona o campo de descontos e etc
            $boleto->descontos = 2100;
        }
        parent::handle($boleto);
    }
}
