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

        #session(['key' => 'value']);

        #$value = session('key');

        #print $value;

        #return view('welcome');
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
        $data = json_decode($response->getBody(), true);
        
        #
        #dd($data['access_token']);   
        session(['access_token' => $data['access_token']]); 

        $access_token = session('access_token');

        #print $access_token;

        //Para chamar os serviços depois da identificação, basta utilizar o exemplo abaixo
        #http://dev.backend.com.br/api/usuarios?token=

        #$response = Http::get('http://127.0.0.1:8000/api/usuarios/'.$usuario);

        return redirect('/anuncios');

    }
    
    /**
     * anuncio
     *
     * @return void
     */
    public function anuncio()
    {
        $access_token = session('access_token');

        $response = Http::get('http://dev.backend.com.br/api/anuncios?token='.$access_token);

        $data = $response->json();

        dd($data);

    }
}
