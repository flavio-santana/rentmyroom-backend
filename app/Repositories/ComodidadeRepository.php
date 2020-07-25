<?php

namespace App\Repositories;

use App\Model\Comodidade;

class ComodidadeRepository implements ComodidadeRepositoryInterface
{
    /**
     * Retorna um comodidade por ID
     *
     * @param int
     * @return collection
     */
    public function get($comodidade_id)
    {
        return Comodidade::find($comodidade_id);
    }

    /**
     * Retorna todas as comodidades
     *
     * @return mixed
     */
    public function all()
    {
        return Comodidade::all();
    }

    /**
     * Apaga um comodidade
     *
     * @param int
     */
    public function delete($comodidade_id)
    {
        Comodidade::destroy($comodidade_id);
    }

    /**
     * Atualiza uma comodidade
     *
     * @param int
     * @param array
     */
    public function update($comodidade_id, array $data)
    {
        Comodidade::find($comodidade_id)->update($data);
    }
}