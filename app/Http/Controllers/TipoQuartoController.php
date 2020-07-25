<?php

namespace App\Http\Controllers;

use App\Model\TipoQuarto;
use Illuminate\Http\Request;
use App\Repositories\TipoQuartoRepository;

class TipoQuartoController extends Controller
{

    protected $tipoQuarto;

    /**
     * TipoQuartoController constructor.
     *
     * @param TipoQuartoRepository $post
     */
    public function __construct(TipoQuartoRepository $tipoQuarto)
    {
        $this->tipoQuarto = $tipoQuarto;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Model\TipoQuarto  $tipoQuarto
     * @return \Illuminate\Http\Response
     */
    public function show(TipoQuarto $tipoQuarto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TipoQuarto  $tipoQuarto
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoQuarto $tipoQuarto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TipoQuarto  $tipoQuarto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoQuarto $tipoQuarto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TipoQuarto  $tipoQuarto
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoQuarto $tipoQuarto)
    {
        //
    }
}
