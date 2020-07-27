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
    public function get($id)
    {
        return Usuario::find($id);
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
    public function delete($id)
    {
        Usuario::destroy($id);
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data)
    {
        Usuario::find($id)->update($data);
    }
}   