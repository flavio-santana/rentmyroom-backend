<?php

namespace App\Repositories;

use App\Model\TipoImovel;

class TipoImovelRepository implements TipoImovelRepositoryInterface
{
    /**
     * Retorna um tipo de imovel por ID
     *
     * @param int
     * @return collection
     */
    public function get($tipoImovel_id)
    {
        return TipoImovel::find($tipoImovel_id);
    }

    /**
     * Retorna todos os tipos de imoveis
     *
     * @return mixed
     */
    public function all()
    {
        return TipoImovel::all();
    }

    /**
     * Apaga um tipo de imovel
     *
     * @param int
     */
    public function delete($tipoImovel_id)
    {
        TipoImovel::destroy($tipoImovel_id);
    }

    /**
     * Atualiza um tipo de imovel
     *
     * @param int
     * @param array
     */
    public function update($tipoImovel_id, array $data)
    {
        TipoImovel::find($tipoImovel_id)->update($data);
    }
}