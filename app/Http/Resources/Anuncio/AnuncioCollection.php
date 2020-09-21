<?php

namespace App\Http\Resources\Anuncio;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * AnuncioCollection
 */
class AnuncioCollection extends JsonResource
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
            'titulo'         => $this->titulo,
            'descricao'      => $this->descricao,
            'valorAluguel'   => $this->valorAluguel,
            'bairro'         => $this->bairro,
            'cidade'         => $this->cidade,
            
            'ref' => [
                'href' => route('anuncios.show',$this->id),
            ]   
        ];
    }
}
