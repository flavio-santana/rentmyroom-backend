<?php

namespace App\Repositories;

interface ImovelRepositoryInterface
{

    /**
     * Retorna um imovel por ID
     *
     * @param int
     */
    public function get($imovel_id);

    /**
     * Retorna todos os imoveis
     *
     * @return mixed
     */
    public function all();

    /**
     * Apaga uma imovel
     *
     * @param int
     */
    public function delete($imovel_id);

    /**
     * Atualiza um imovel
     *
     * @param int
     * @param array
     */
    public function update($imovel_id, array $data);
}