<?php

namespace App\Repositories;

use App\Model\Usuario;

class UsuarioRepository implements UsuarioRepositoryInterface
{
    /**
     * Get's a post by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($usuario_id)
    {
        return Usuario::find($usuario_id);
    }

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all()
    {
        return Usuario::all();
    }

    /**
     * Deletes a post.
     *
     * @param int
     */
    public function delete($usuario_id)
    {
        Usuario::destroy($usuario_id);
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($usuario_id, array $usuario_data)
    {
        Usuario::find($usuario_id)->update($usuario_data);
    }
}