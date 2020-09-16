<?php

namespace App\Repositories;

use App\Model\TipoQuarto;

class TipoQuartoRepository implements TipoQuartoRepositoryInterface
{
    /**
     * Retorna um tipo de quarto por ID
     *
     * @param int
     * @return collection
     */
    public function get($tipoQuarto_id)
    {
        return TipoQuarto::find($tipoQuarto_id);
    }

    /**
     * Retorna todos os tipos de quartos
     *
     * @return mixed
     */
    public function all()
    {
        return TipoQuarto::all();
    }

    /**
     * Apaga um tipo de quarto
     *
     * @param int
     */
    public function delete($tipoQuarto_id)
    {
        TipoQuarto::destroy($tipoQuarto_id);
    }

    /**
     * Atualiza um tipo de quarto
     *
     * @param int
     * @param array
     */
    public function update($tipoQuarto_id, array $data)
    {
        TipoQuarto::find($tipoQuarto_id)->update($data);
    }
}