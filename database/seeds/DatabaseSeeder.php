<?php

use Illuminate\Database\Seeder;

use App\Model\Usuario;
use App\Model\Imovel;
use App\Model\TipoQuarto;
use App\Model\TipoImovel;
use App\Model\Anuncio;

/**
 * DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Usuario::class,500)->create(); 
        
        factory(TipoQuarto::class,3)->create();
        
        factory(TipoImovel::class,3)->create();

        factory(Imovel::class,50)->create();

        factory(Anuncio::class,50)->create(); 
    }
}