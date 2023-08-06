<?php

namespace App\Patterns\Repository;
/**
 * Criação de uma interface comum a todos os repositórios
 */
interface RepositoryInterface
{
    public function getAll();

    public function find();

    public function create();

    public function update();

    public function delete();
}