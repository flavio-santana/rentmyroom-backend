<?php

namespace App\Repositories;

interface AnuncioComodidadeRepositoryInterface
{

    /**
     * Retorna um anuncio vinculado a comodidade por ID
     *
     * @param int
     */
    public function get($anuncioComodidade_id);

    /**
     * Retorna todas os anuncio e comodidades vinculados
     *
     * @return mixed
     */
    public function all();

    /**
     * Apaga um anuncio vinculado a uma comunidade
     *
     * @param int
     */
    public function delete($anuncioComodidade_id);

    /**
     * Atualiza um anuncio vinculado a uma comunidade
     *
     * @param int
     * @param array
     */
    public function update($anuncioComodidade_id, array $data);
}