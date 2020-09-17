<?php

namespace App\Http\Resources\Comodidade;

use Illuminate\Http\Resources\Json\JsonResource;

class ComodidadeCollection extends JsonResource
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
            #'id'         => $this->id,
            'descricao ' => $this->descricao,
            'publicado'  => $this->publicado,
            
            'ref' => [
                #'href' => route('anuncios.index'),
            ]   
        ];
    }
}
