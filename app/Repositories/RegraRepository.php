<?php

namespace App\Repositories;

use App\Model\Regra;

class RegraRepository implements RegraRepositoryInterface
{
    /**
     * Retorna um regra por ID
     *
     * @param int
     * @return collection
     */
    public function get($regra_id)
    {
        return Regra::find($regra_id);
    }

    /**
     * Retorna todas as regras
     *
     * @return mixed
     */
    public function all()
    {
        return Regra::all();
    }

    /**
     * Apaga uma regra
     *
     * @param int
     */
    public function delete($regra_id)
    {
        Regra::destroy($regra_id);
    }

    /**
     * Atualiza uma regra
     *
     * @param int
     * @param array
     */
    public function update($regra_id, array $data)
    {
        Regra::find($regra_id)->update($data);
    }
}