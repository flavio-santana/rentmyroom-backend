<?php

namespace App\Repositories;

interface TipoQuartoRepositoryInterface
{

    /**
     * Retorna um tipo quarto por ID
     *
     * @param int
     */
    public function get($tipoQuarto_id);

    /**
     * Retorna todos os tipos quartos
     *
     * @return mixed
     */
    public function all();

    /**
     * Apaga um tipo quarto
     *
     * @param int
     */
    public function delete($tipoQuarto_id);

    /**
     * Atualiza um tipo quarto
     *
     * @param int
     * @param array
     */
    public function update($tipoQuarto_id, array $data);
}