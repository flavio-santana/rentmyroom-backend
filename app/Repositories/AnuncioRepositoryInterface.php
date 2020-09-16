<?php

namespace App\Repositories;

interface AnuncioRepositoryInterface
{

    /**
     * Retorna um anuncio vinculado a comodidade por ID
     *
     * @param int
     */
    public function get($anuncio_id);

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
    public function delete($anuncio_id);

    /**
     * Atualiza um anuncio vinculado a uma comunidade
     *
     * @param int
     * @param array
     */
    public function update($anuncio_id, array $data);
}