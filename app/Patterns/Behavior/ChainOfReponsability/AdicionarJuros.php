<?php

namespace App\Patterns\Behavior\ChainOfReponsability;

use App\Models\Boleto;

class AdicionarJuros extends Handler
{
    /**
     * @param Boleto $boleto
     * @return void
     */
    public function handle(Boleto $boleto): void
    {
        // Implementação da lógica que chama o handler
        if ($boleto->vencimento->endOfDay()->lessThan(now())){
            // aqui entra as regras e somtários usadas para o totalizados de juros
            $boleto->juros = 5000;
        }
        parent::handle($boleto);

    }

}