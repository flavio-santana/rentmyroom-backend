<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * IndexController
 */
class IndexController extends Controller
{
        
    /**
     * index
     *
     * @param  mixed $request
     * @return void
     */
    public function index(Request $request)
    {
        return view('welcome');
    }
    
    /**
     * login
     *
     * @return void
     */
    public function login(Request $request)
    {

        //
        #$response = Http::asForm()->post('http://127.0.0.1:8000/api/auth/login', [
        $response = Http::asForm()->post('http://dev.backend.com.br/api/auth/login', [
           
            'email'    => 'f.o.santana@gmail.com',
            'password' => '123456',

        ]);
        
        #dd(json_decode($response->getBody(), true));
        
        #
        #$data = json_decode($response->getBody(), true);
        
        #
        #dd($data['access_token']);    

        //Para chamar os serviços depois da identificação, basta utilizar o exemplo abaixo
        #http://dev.backend.com.br/api/usuarios?token=

        #$response = Http::get('http://127.0.0.1:8000/api/usuarios/'.$usuario);

    }
}
