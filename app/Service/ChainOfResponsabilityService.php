<?php

namespace App\Service;

use App\Patterns\Behavior\ChainOfReponsability\AdicionarJuros;
use App\Patterns\Behavior\ChainOfReponsability\AdicionarDesconto;

/*
 * AINDA EM CONSTRUÇÃO
 */
class ChainOfResponsabilityService
{

    // Método para chamar o handler implementado apenas para contexto de EXEMPLO
    // O valor poderia ser qualquer outro tipo sem problemas
    public function chamarAcao($value = 0)
    {
        $juros = new AdicionarJuros();
        $desconto = new AdicionarDesconto();
        dump($juros->next($desconto)->handle($value));
        return $juros->next($desconto)->handle($value);
    }
}