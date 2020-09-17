<?php

namespace App\Http\Resources\Usuario;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       
        return [
            'id'             => $this->id,
            'nome'           => $this->nome,
            'dataNascimento' => $this->dataNascimento,
            'cpf'            => $this->cpf,
            'genero'         => $this->genero,
            'telefone'       => $this->telefone,
            'email'          => $this->email,
            #'senha'          => $this->senha,
            'publicado'      => $this->publicado,
            #'created_at'     => $this->created_at,
            #'updated_at'     => $this->updated_at,

            'ref' => [
                'href' => route('usuarios.index'),
            ]   
        ];
    }
}
