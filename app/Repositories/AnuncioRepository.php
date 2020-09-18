<?php

namespace App\Repositories;

use App\Model\Anuncio;
use App\Model\AnuncioRegra;

/**
 * AnuncioRepository
 */
class AnuncioRepository implements AnuncioRepositoryInterface
{
    /**
     * Retorna um anuncio por ID
     *
     * @param int
     * @return collection
     */
    public function get($anuncio_id)
    {
        return Anuncio::find($anuncio_id);
    }

    /**
     * Retorna todas os anuncios
     *
     * @return mixed
     */
    public function all()
    {
        return Anuncio::all();
    }

    /**
     * Apaga um anuncio
     *
     * @param int
     */
    public function delete($anuncio_id)
    {
        Anuncio::destroy($anuncio_id);
    }

    /**
     * Atualiza um anuncio
     *
     * @param int
     * @param array
     */
    public function update($anuncio_id, array $data)
    {
        Anuncio::find($anuncio_id)->update($data);
    }
    
    /**
     * anunciosPublicados
     *
     * @return void
     */
    public function anuncios(String $opcao)
    {
        return Anuncio::where('publicado', '=', $opcao)
        #->whereDate('data_inicio', '<=', '2020-08-12')
        #->whereDate('data_termino', '>=', '2020-08-12')
        ->get();
    }
    
    /**
     * regras
     *
     * @param  mixed $anuncio_id
     * @return void
     */
    public function regras(int $anuncio_id)
    {
         
        return AnuncioRegra::where('anuncio_id',$anuncio_id)
        ->select(['anuncio_regras.id', 
        'regras.descricao', 
        'regras.publicado'])
        ->join('regras','anuncio_regras.regra_id','=','regras.id')
        ->orderBy('regras.descricao')
        ->get();

    }
    
    /**
     * comodidades
     *
     * @param  mixed $anuncio_id
     * @return void
     */
    public function comodidades(int $anuncio_id)
    {
         
        return AnuncioRegra::where('anuncio_id',$anuncio_id)
        ->select(['anuncio_regras.id', 
        'comodidades.descricao', 
        'comodidades.publicado'])
        ->join('comodidades','anuncio_regras.regra_id','=','comodidades.id')
        ->orderBy('comodidades.descricao')
        ->get();

    }
}