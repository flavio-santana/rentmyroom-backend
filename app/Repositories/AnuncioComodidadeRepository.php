<?php

namespace App\Repositories;

use App\Model\AnuncioComodidade;

class AnuncioComodidadeRepository implements AnuncioComodidadeRepositoryInterface
{
    /**
     * Retorna um anuncio e comodidade por ID
     *
     * @param int
     * @return collection
     */
    public function get($anuncioComodidade_id)
    {
        return AnuncioComodidade::find($anuncioComodidade_id);
    }

    /**
     * Retorna todas os anuncios e comodidade vinculados
     *
     * @return mixed
     */
    public function all()
    {
        return AnuncioComodidade::all();
    }

    /**
     * Apaga um anuncio vinculado a comodidade
     *
     * @param int
     */
    public function delete($anuncioComodidade_id)
    {
        AnuncioComodidade::destroy($anuncioComodidade_id);
    }

    /**
     * Atualiza um anuncio vinculado a comodidade
     *
     * @param int
     * @param array
     */
    public function update($anuncioComodidade_id, array $data)
    {
        AnuncioComodidade::find($anuncioComodidade_id)->update($data);
    }
}