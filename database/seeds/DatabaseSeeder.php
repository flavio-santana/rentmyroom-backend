<?php

use Illuminate\Database\Seeder;

use App\Model\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Usuario::class,100)->create();    
    }
}
