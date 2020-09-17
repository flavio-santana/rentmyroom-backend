<?php

namespace App\Http\Resources\Comodidade;

use Illuminate\Http\Resources\Json\JsonResource;

class ComodidadeResource extends JsonResource
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
            'id'         => $this->id,
            'descricao ' => $this->descricao,
            'publicado'  => $this->publicado,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'ref' => [
                #'href' => route('anuncios.index'),
            ]   
        ];
    }
}
