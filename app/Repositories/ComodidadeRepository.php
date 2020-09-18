<?php

namespace App\Repositories;

use App\Model\Comodidade;

class ComodidadeRepository implements ComodidadeRepositoryInterface
{
    /**
     * Retorna um comodidade por ID
     *
     * @param int
     * @return collection
     */
    public function get($comodidade_id)
    {
        return Comodidade::find($comodidade_id);
    }

    /**
     * Retorna todas as comodidades
     *
     * @return mixed
     */
    public function all()
    {
        return Comodidade::all();
    }

    /**
     * Apaga um comodidade
     *
     * @param int
     */
    public function delete($comodidade_id)
    {
        Comodidade::destroy($comodidade_id);
    }

    /**
     * Atualiza uma comodidade
     *
     * @param int
     * @param array
     */
    public function update($comodidade_id, array $data)
    {
        Comodidade::find($comodidade_id)->update($data);
    }

    
    /**
     * comodidadeOferecida
     *
     * @return void
     */
    public function comodidadeOferecida()
    {
        return Comodidade::where('comodidades.publicado','=','Sim')
        ->select('comodidades.id','comodidades.descricao','comodidades.publicado')
        ->join('anuncio_comodidades','comodidades.id','=','anuncio_comodidades.anuncio_id')
        ->join('anuncios','anuncios.id','=','anuncio_comodidades.anuncio_id')
        ->where('comodidades.publicado','=','Sim')
        ->where('anuncio_comodidades.publicado','=','Sim')
        ->whereDate('anuncios.dataDisponivel','<=',date('Y-m-d'))
        ->orderBy('comodidades.descricao')
        ->get();
    }
}