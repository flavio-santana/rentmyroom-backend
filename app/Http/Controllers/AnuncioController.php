<?php

namespace App\Http\Controllers;

use App\Model\Anuncio;
use Illuminate\Http\Request;
use App\Repositories\AnuncioRepository;
use App\Http\Resources\Anuncio\AnuncioResource;
use App\Http\Resources\Anuncio\AnuncioCollection;
#use App\Http\Resources\Comodidade\ComodidadeResource;
use App\Http\Resources\Comodidade\ComodidadeCollection;
#use App\Http\Resources\Regra\RegraResource;
use App\Http\Resources\Regra\RegraCollection;
use App\Http\Resources\AnuncioMensagem\AnuncioMensagemCollection;


/**
 * AnuncioController
 */
class AnuncioController extends Controller
{

    protected $anuncio;

    /**
     * UsuarioController constructor.
     *
     * @param UsuarioRepository $post
     */
    public function __construct(AnuncioRepository $anuncio)
    {
        $this->anuncio = $anuncio;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return AnuncioCollection::collection($this->anuncio->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function show(Anuncio $anuncio)
    {
        //
        //return response()->json(['success' => '1','data' =>$this->anuncio->get($anuncio->id)]);
        return response()->json(['data' =>$this->anuncio->get($anuncio->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function edit(Anuncio $anuncio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anuncio $anuncio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anuncio $anuncio)
    {
        //
    }
    
    /**
     * anunciosPublicados
     *
     * @return void
     */
    public function anuncioPublicado(string $opcao)
    {
        
        //
        return AnuncioCollection::collection($this->anuncio->anuncios($opcao));
    }
    
    /**
     * anuncioComodidade
     *
     * @return void
     */
    public function anuncioComodidade(Anuncio $anuncio)
    {
    
       // 
       return ComodidadeCollection::collection($this->anuncio->comodidades($anuncio->id));
    }

    /**
     * anuncioRegra
     *
     * @return void
     */
    public function anuncioRegra(Anuncio $anuncio)
    {
        
        //
        return RegraCollection::collection($this->anuncio->regras($anuncio->id));
    }
    
    /**
     * anuncioMensagem
     *
     * @param  mixed $anuncio
     * @return void
     */
    public function anuncioMensagem(Anuncio $anuncio)
    {
        return AnuncioCollection::collection($anuncio->mensagens);
    }
}
