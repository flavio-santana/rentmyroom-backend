<?php

namespace App\Http\Controllers;

use App\Model\Comodidade;
use Illuminate\Http\Request;
use App\Repositories\ComodidadeRepository;
use App\Http\Resources\Comodidade\ComodidadeResource;
use App\Http\Resources\Comodidade\ComodidadeCollection;

class ComodidadeController extends Controller
{

    protected $comodidade;

    /**
     * UsuarioController constructor.
     *
     * @param UsuarioRepository $post
     */
    public function __construct(ComodidadeRepository $comodidade)
    {
        $this->comodidade = $comodidade;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        dd('index');
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
     * @param  \App\Model\Comodidade  $comodidade
     * @return \Illuminate\Http\Response
     */
    public function show(Comodidade $comodidade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Comodidade  $comodidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Comodidade $comodidade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Comodidade  $comodidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comodidade $comodidade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Comodidade  $comodidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comodidade $comodidade)
    {
        //
    }
    
    /**
     * comodidadeOferecida
     *
     * @return void
     */
    public function comodidadeOferecida()
    {
        //
        return ComodidadeCollection::collection($this->comodidade->comodidadeOferecida());
    }
}
