<?php

namespace App\Repositories;
/**
 * Criação de uma interface comum a todos os repositórios e caso algum repositório tenha métodos especificos pode-se
 * extender essa interface com os métodos pertecente a este especificamente ao repositório filho.
 */
interface RepositoryInterface
{
    public function getAll();

    /*public function find(int|string $id);*/

    public function create(mixed $object);

    //Exemplo nao usados
    /*public function update(mixed $object, int|string $id);

    public function delete(int|string $id);*/
}