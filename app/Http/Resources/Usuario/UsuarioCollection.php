<?php

namespace App\Http\Resources\Usuario;

use Illuminate\Http\Resources\Json\JsonResource;

class UsuarioCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
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
            'telefone'       => $this->telefone,

            'ref' => [
                'href' => route('usuarios.show',$this->id),
            ]   
        ];
    }
}
