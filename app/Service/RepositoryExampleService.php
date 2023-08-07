<?php

namespace App\Service;

use App\Models\Boleto;
use App\Repositories\RepositoryInterface;

class RepositoryExampleService
{
    public function __construct(private RepositoryInterface $repository)
    {
    }

    public function list()
    {
        return $this->repository->getAll();
    }

    public function create(array $data)
    {
        /*
         * qualquer regra de negócio que seja utilizada.
         */
        if (true) {
            print 'alguma coisa que deve ser feita antes de inserir o registro no banco e ect';
        }

        /*
         * Para atender a interface vou passar os dados como array e cada repository usará este array para
         * fazer a persistência desses dados, por exemplo, porém nao usarei o método save(),
         * pois ao usar um repository essa responsabilidade passar a ser dele. Casos mais eloborados poderiam envolver
         * um DTO comum tanto para Eloquent quanto para algum outro ORM, como o Doctrine. Assim tornando possível
         * usar essa abstração como tipo de entrada e saída nos métodos da RepositoryInterface;
         */
        $data['observacao'] = 'alguma informacao que deve ser salva';

        return $this->repository->create($data);
    }
}