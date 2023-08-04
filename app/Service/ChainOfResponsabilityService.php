<?php

namespace App\Service;

use App\Patterns\Behavior\ChainOfReponsability\AcaoAdicionarJuros;
use App\Patterns\Behavior\ChainOfReponsability\AcaoCalcularDesconto;

class ChainOfResponsabilityService
{

    // Método para chamar o handler implementado apenas para contexto de EXEMPLO
    // O valor poderia ser qualquer outro tipo sem problemas
    public function chamarAcao($value = 0)
    {
        $juros = new AcaoAdicionarJuros();
        $desconto = new AcaoCalcularDesconto();
        return $juros->next($desconto);
    }
}