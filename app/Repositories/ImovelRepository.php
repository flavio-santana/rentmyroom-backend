<?php

namespace App\Repositories;

use App\Model\Imovel;

/**
 * ImovelRepository
 */
class ImovelRepository implements ImovelRepositoryInterface
{
    /**
     * Retorna um imovel por ID
     *
     * @param int
     * @return collection
     */
    public function get($imovel_id)
    {
        return Imovel::find($imovel_id);
    }

    /**
     * Retorna todas as regras
     *
     * @return mixed
     */
    public function all()
    {
        return Imovel::all();
    }

    /**
     * Apaga um imovel
     *
     * @param int
     */
    public function delete($imovel_id)
    {
        Imovel::destroy($imovel_id);
    }

    /**
     * Atualiza uma imovel
     *
     * @param int
     * @param array
     */
    public function update($imovel_id, array $data)
    {
        Imovel::find($imovel_id)->update($data);
    }
}