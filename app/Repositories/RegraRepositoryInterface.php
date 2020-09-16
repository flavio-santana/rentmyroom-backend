<?php

namespace App\Repositories;

interface RegraRepositoryInterface
{

    /**
     * Retorna um regra por ID
     *
     * @param int
     */
    public function get($regra_id);

    /**
     * Retorna todos as regras
     *
     * @return mixed
     */
    public function all();

    /**
     * Apaga uma regra
     *
     * @param int
     */
    public function delete($regra_id);

    /**
     * Atualiza uma regra
     *
     * @param int
     * @param array
     */
    public function update($regra_id, array $data);
}