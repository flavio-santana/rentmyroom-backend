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
        return Anuncio::where('anuncios.id',$anuncio_id)
        ->select('anuncios.id',
        'anuncios.titulo',
        'anuncios.descricao as descricaoAnuncio',
        'anuncios.valorAluguel',
        'imovels.bairro',
        'imovels.cidade',
        'imovels.uf')
        ->join('imovels','anuncios.imovel_id','=','imovels.id')
        ->join('tipo_quartos','anuncios.TipoQuarto_id','=','tipo_quartos.id')
        ->get();
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
    public function anuncios(string $opcao)
    {

        return Anuncio::where('anuncios.publicado', '=', $opcao)
        ->select('anuncios.id',
        'anuncios.titulo',
        'anuncios.descricao',
        'anuncios.valorAluguel',
        'imovels.bairro')
        ->join('imovels','anuncios.imovel_id','=','imovels.id')
        ->whereDate('anuncios.dataDisponivel','<=',date('Y-m-d'))
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

        
    /**
     * pesquisa
     *
     * @param  mixed $cidade
     * @return void
     */
    public function pesquisa(string $cidade)
    {

        $cidade = str_replace('-',' ',$cidade);

        #dd($cidade);

        return Anuncio::select('anuncios.id',
        'anuncios.titulo', 
        'anuncios.descricao', 
        'anuncios.valorAluguel',
        'imovels.bairro',
        'imovels.cidade')
        ->join('imovels','anuncios.imovel_id','=','imovels.id')
        ->where('imovels.cidade','like',$cidade)
        ->whereDate('anuncios.dataDisponivel','<=',date('Y-m-d'))
        ->where('anuncios.publicado', '=', 'Nao')
        ->get();
    }
}