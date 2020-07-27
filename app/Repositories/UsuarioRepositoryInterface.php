<?php

namespace App\Repositories;

interface UsuarioRepositoryInterface
{

    /**
     * Get's um usuário por ID
     *
     * @param int
     */
    public function get($id);

    /**
     * Get's todos os usuários
     *
     * @return mixed
     */
    public function all();

    /**
     * Deletes um usuário
     *
     * @param int
     */
    public function delete($id);

    /**
     * Updates um usuário
     *
     * @param int
     * @param array
     */
    public function update($id, array $data);
}