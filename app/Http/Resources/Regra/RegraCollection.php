<?php

namespace App\Http\Resources\Regra;

use Illuminate\Http\Resources\Json\JsonResource;

class RegraCollection extends JsonResource
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
            'id'        => $this->id,
            'descricao' => $this->descricao,
            'publicado' => $this->publicado,
            
            'ref' => [
                #'href' => route('anuncios.index'),
            ]   
        ];
    }
}
