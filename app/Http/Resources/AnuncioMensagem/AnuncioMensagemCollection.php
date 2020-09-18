<?php

namespace App\Http\Resources\AnuncioMensagem;

use Illuminate\Http\Resources\Json\JsonResource;

class AnuncioMensagemCollection extends JsonResource
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
            'id'          => $this->id,
            'anuncio_id ' => $this->anuncio_id ,
            'usuario_id'  => $this->usuario_id,
            'mensagem'    => $this->mensagem,
            'lida'        => $this->lida,
            
            'ref' => [
                #'href' => route('anuncios.index'),
            ]   
        ];
    }
}
