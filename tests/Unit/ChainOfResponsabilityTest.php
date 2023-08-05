<?php

use App\Models\Boleto;
use App\Service\ChainOfResponsabilityService;

/* Testes unitários que contemplam tanto o caminho feliz quando fluxos alternativos que podem acontecer.
 * E vale deixar claro que o teste não garante que não possa acontecer bugs, mas testes bem feitos nos
 * permite ter uma visão clara se houver alguma regressão, ou seja, um código inserido posteriormente que
 * afete essa função seria detectado.
 */

/*
 * Para o teste está sendo usado uma abordagem top-down, pegando do service e testando a funcionalidade de todas as
 * classes envolvidas no service.
 */

test('deve calcular juros de boletos atrassados', function ($boleto) {
    $chain = new ChainOfResponsabilityService();
    $boleto = $chain->calcularBoleto($boleto);
    expect($boleto->juros)->not()->toBeNull();
})->with([
    [
        fn() => Boleto::factory()->create(),
    ],
    [
        fn() => Boleto::factory()->create(),
    ],
    [
        fn() => Boleto::factory()->create(),
    ],
]);

test('nao deve calcular juros em boletos nao vencidos', function ($boleto) {
    $chain = new ChainOfResponsabilityService();
    $boleto = $chain->calcularBoleto($boleto);
    expect($boleto->juros)->toBeNull();
})->with([
    [
        fn() => Boleto::factory()->state(['vencimento' => now()])->create(),
    ],
    [
        fn() => Boleto::factory()->state(['vencimento' => now()])->create(),
    ],
    [
        fn() => Boleto::factory()->state(['vencimento' => now()])->create(),
    ],
]);

test('calcular desconto em boletos nao vencidos', function ($boleto) {
    $chain = new ChainOfResponsabilityService();
    $boleto = $chain->calcularBoleto($boleto);
    expect($boleto->descontos)->not()->toBeNull();
})->with([
    [
        fn() => Boleto::factory()->state(['vencimento' => now()])->create(),
    ],
    [
        fn() => Boleto::factory()->state(['vencimento' => now()->addDays()])->create(),
    ],
    [
        fn() => Boleto::factory()->state(['vencimento' => now()->addMonth()])->create(),
    ],
]);

test('nao calcular desconto em boletos vencidos', function ($boleto) {
    $chain = new ChainOfResponsabilityService();
    $boleto = $chain->calcularBoleto($boleto);
    expect($boleto->descontos)->toBeNull();
})->with([
    [
        fn() => Boleto::factory()->state(['vencimento' => now()->subDay()])->create(),
    ],
    [
        fn() => Boleto::factory()->state(['vencimento' => now()->subDay()])->create(),
    ],
    [
        fn() => Boleto::factory()->state(['vencimento' => now()->subDay()])->create(),
    ],
]);
