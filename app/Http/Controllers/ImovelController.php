<?php

namespace App\Http\Controllers;

use App\Model\Imovel;
use Illuminate\Http\Request;

/**
 * ImovelController
 */
class ImovelController extends Controller
{

    /**
     * UsuarioController constructor.
     *
     * @param UsuarioRepository $post
     */
    public function __construct()
    {
        #$this->middleware('jwt.auth');
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
     * @param  \App\Model\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function show(Imovel $imovel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function edit(Imovel $imovel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imovel $imovel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imovel $imovel)
    {
        //
    }
}
