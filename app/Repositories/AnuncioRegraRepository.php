<?php

namespace App\Repositories;

use App\Model\AnuncioRegra;
use App\Model\Regra;

class AnuncioRegraRepository implements AnuncioRegraRepositoryInterface
{
    /**
     * Retorna um Anuncio e regra por ID
     *
     * @param int
     * @return collection
     */
    public function get($anuncioRegra_id)
    {
        return AnuncioRegra::find($anuncioRegra_id);
    }

    /**
     * Retorna todas os anuncio e regras
     *
     * @return mixed
     */
    public function all()
    {
        return AnuncioRegra::all();
    }

    /**
     * Apaga um anuncio regra
     *
     * @param int
     */
    public function delete($anuncioRegra_id)
    {
        AnuncioRegra::destroy($anuncioRegra_id);
    }

    /**
     * Atualiza um anuncio regra
     *
     * @param int
     * @param array
     */
    public function update($anuncioRegra_id, array $data)
    {
        AnuncioRegra::find($anuncioRegra_id)->update($data);
    }

}