<?php

namespace App\Http\Resources\Anuncio;

use Illuminate\Http\Resources\Json\JsonResource;

class AnuncioResource extends JsonResource
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
            'imovel_id '     => $this->imovel_id ,
            'tipoQuarto_id'  => $this->tipoQuarto_id,
            'titulo'         => $this->titulo,
            'descricao'      => $this->descricao,
            'valorAluguel'   => $this->valorAluguel,
            'dataDisponivel' => $this->dataDisponivel,
            'publicado'      => $this->publicado,
            
            'ref' => [
                'href' => route('anuncios.index'),
            ]   
        ];
    }
}
