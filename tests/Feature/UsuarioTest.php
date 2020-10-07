<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * UsuarioTest
 */
class UsuarioTest extends TestCase
{

    use WithFaker;
    
    /**
     * testGetUsuarios
     *
     * @return void
     */
    public function testGetUsuarios()
    {
        $response = $this->get('/api/usuarios');

        $response->assertStatus(200);
    }
    
    /**
     * testGetUsuario
     *
     * @return void
     */
    public function testGetUsuario()
    {
        $response = $this->get('/api/usuarios/9');

        $response->assertStatus(200);
    }
    
    /**
     * testGetUsuariosAnuncios
     *
     * @return void
     */
    public function testGetUsuariosAnuncios()
    {
        $response = $this->get('/api/usuarios/9/anuncios');

        $response->assertStatus(200);
    }
    
        
    /**
     * testNovoUsuario
     *
     * @param  mixed $faker
     * @return void
     */
    public function testNovoUsuario()
    {

        $response = $this->postJson('/api/usuarios',[

            'nome' => $this->faker->name, 
            
            'genero' => $this->faker->randomElement($array = array ('F','M')),
            
            'dataNascimento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            
            'cpf' => $this->faker->numerify('###########'),
            
            'telefone' => $this->faker->numerify('(##)#####-####'), // 'Hello 609'
            
            'email' => $this->faker->freeEmail,
            
            'senha' => $this->faker->numerify('######'),
            
            'publicado' => $this->faker->randomElement($array = array ('Sim','Nao')),
            
        ]);
        
        $response->assertStatus(200);

    }
    
    /**
     * testUpdateUsuario
     *
     * @return void
     */
    public function testUpdateUsuario()
    {
        
        $response = $this->putJson('/api/usuarios/100',[

            'nome' => $this->faker->name, 
            
            'genero' => $this->faker->randomElement($array = array ('F','M')),
            
            'dataNascimento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            
            'cpf' => $this->faker->numerify('###########'),
            
            'telefone' => $this->faker->numerify('(##)#####-####'), // 'Hello 609'
            
            'publicado' => $this->faker->randomElement($array = array ('Sim','Nao'))
            
        ]);
        
        /*
        $response
            ->assertStatus(201)
            ->assertJson([
                'updated' => true,
            ]);
        */
        
        //
        $response->assertStatus(200);
        
    }
}
