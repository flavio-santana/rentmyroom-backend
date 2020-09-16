<?php

namespace App\Repositories;

interface TipoImovelRepositoryInterface
{

    /**
     * Retorna um tipo imoveis por ID
     *
     * @param int
     */
    public function get($tipoImovel_id);

    /**
     * Retorna todos os tipos imoveis
     *
     * @return mixed
     */
    public function all();

    /**
     * Apaga um tipo imovel
     *
     * @param int
     */
    public function delete($tipoImovel_id);

    /**
     * Atualiza um tipo imovel
     *
     * @param int
     * @param array
     */
    public function update($tipoImovel_id, array $data);
}