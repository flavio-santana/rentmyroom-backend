<?php

namespace App\Repositories;

interface UsuarioRepositoryInterface
{

    /**
     * Get's um usuário por ID
     *
     * @param int
     */
    public function get($usuario_id);

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
    public function delete($usuario_id);

    /**
     * Updates um usuário
     *
     * @param int
     * @param array
     */
    public function update($usuario_id, array $usuario_data);
}