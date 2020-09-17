<?php

namespace App\Http\Resources\Regra;

use Illuminate\Http\Resources\Json\JsonResource;

class RegraResource extends JsonResource
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
            'descricao'  => $this->descricao,
            'publicado'  => $this->publicado,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'ref' => [
                #'href' => route('anuncios.index'),
            ]   
        ];
    }
}
