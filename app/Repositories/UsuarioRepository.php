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
        $resposta=Usuario::destroy($id); 

        if ($resposta){
            $data=[
                'status'=>'1',
                'msg'=>'success'
            ];
        }else{
            $data=[
                'status'=>'0',
                'msg'=>'fail'
            ];
        } 
        
        return $data;
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($id, $json)
    {
        // json to array
        $data = [
            'nome' => $json->{'nome'},

            'dataNascimento ' => $json->{'dataNascimento'},
            
            'cpf' => $json->{'cpf'},
            
            'email' => $json->{'email'},
            
            'telefone' => $json->{'telefone'},
            
            'genero' => $json->{'genero'},

        ];
        
        //
        $resposta = Usuario::find($id)->update($data);

        if ($resposta){
            $data=[
                'status'=>'1',
                'msg'=>'success'
            ];
        }else{
            $data=[
                'status'=>'0',
                'msg'=>'fail'
            ];
        } 
        
        return $data;
    }
}   