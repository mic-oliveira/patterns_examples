<?php

use App\Models\Boleto;
use App\Repositories\BoletoEloquentRepository;
use App\Service\RepositoryExampleService;

test('buscar lista de boletos através do repository', function ($expectedListCount) {
    $service = new RepositoryExampleService(new BoletoEloquentRepository());
    $result = $service->list();
    // Verifica se o número de objetos listados é igual a quantidade que foi criada na base de dados.
    expect($result)->toHaveCount($expectedListCount);
})->with([
    // Mock de dados retornando a quantidade de Boletos que deve ser retornado a listagem
    [0],
    [fn() => Boleto::factory()->create()->count()],
    [fn() => Boleto::factory()->count(20)->create()->count()]
]);

test('criar boleto com um repository desacoplado salvando uma observacao', function ($boletoArray) {
    $service = new RepositoryExampleService(new BoletoEloquentRepository());
    $result = $service->create($boletoArray);
    expect($result->observacao)->toBe('alguma informacao que deve ser salva');
})->with([
    [fn() => Boleto::factory()->make()->toArray()],
    [fn() => Boleto::factory()->make()->toArray()],
    [fn() => Boleto::factory()->make()->toArray()],
    [fn() => Boleto::factory()->make()->toArray()],
]);
