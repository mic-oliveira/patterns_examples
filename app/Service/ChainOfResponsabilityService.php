<?php

namespace App\Service;

use App\Models\Boleto;
use App\Patterns\Behavior\ChainOfReponsability\AdicionarJuros;
use App\Patterns\Behavior\ChainOfReponsability\AdicionarDesconto;

/*
 * AINDA EM CONSTRUÇÃO
 */
class ChainOfResponsabilityService
{
    // Método para chamar o handler implementado apenas para contexto de EXEMPLO
    // O valor poderia ser qualquer outro tipo sem problemas
    /* Usando uma interface é possível desacoplar e passar vários tipos diferentes, desde que esses atendam o contrato
    *  da Interface
    */
    public function calcularBoleto(Boleto $boleto): Boleto
    {
        // Adicao de juros
        $juros = new AdicionarJuros();
        // Adicao de desconto
        $desconto = new AdicionarDesconto();

        /* Seta qual o proximo elemento desse ser chamado, dependendo da lógica ele pode retornar no primeiro
        *  ou executar a todas as resposabilidades como neste caso de teste.
        */
        $juros->next($desconto);

        // Chama o método que fará o disparo da cadeia
        $juros->handle($boleto);

        // persistencia
        $boleto->save();



        // atualizacao e retorno do modelo com as informações atualizadas
        return $boleto->refresh();
    }
}