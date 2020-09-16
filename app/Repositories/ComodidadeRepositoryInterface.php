<?php

namespace App\Repositories;

interface ComodidadeRepositoryInterface
{

    /**
     * Retorna uma comodidade por ID
     *
     * @param int
     */
    public function get($comodidade_id);

    /**
     * Retorna todos as comodidades
     *
     * @return mixed
     */
    public function all();

    /**
     * Apaga uma comodidade
     *
     * @param int
     */
    public function delete($comodidade_id);

    /**
     * Atualiza uma comodidade
     *
     * @param int
     * @param array
     */
    public function update($comodidade_id, array $data);
}