<?php

namespace App\Repositories;

use App\Model\Anuncio;

class AnuncioRepository implements AnuncioRepositoryInterface
{
    /**
     * Retorna um anuncio por ID
     *
     * @param int
     * @return collection
     */
    public function get($anuncio_id)
    {
        return Anuncio::find($anuncio_id);
    }

    /**
     * Retorna todas os anuncios
     *
     * @return mixed
     */
    public function all()
    {
        return Anuncio::all();
    }

    /**
     * Apaga um anuncio
     *
     * @param int
     */
    public function delete($anuncio_id)
    {
        Anuncio::destroy($anuncio_id);
    }

    /**
     * Atualiza um anuncio
     *
     * @param int
     * @param array
     */
    public function update($anuncio_id, array $data)
    {
        Anuncio::find($anuncio_id)->update($data);
    }
}