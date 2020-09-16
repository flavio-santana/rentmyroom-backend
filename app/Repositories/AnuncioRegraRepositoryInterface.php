<?php

namespace App\Repositories;

interface AnuncioRegraRepositoryInterface
{

    /**
     * Retorna um Anuncio e regra por ID
     *
     * @param int
     */
    public function get($anuncioRegra_id);

    /**
     * Retorna todas os anuncio e regras
     *
     * @return mixed
     */
    public function all();

    /**
     * Apaga um anuncio regra
     *
     * @param int
     */
    public function delete($anuncioRegra_id);

    /**
     * Atualiza um anuncio regra
     *
     * @param int
     * @param array
     */
    public function update($comodidade_id, array $data);
}