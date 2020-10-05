<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/api/usuarios');

        $response->assertStatus(200);
    }

    public function testCanGetUsuarios()
    {
        $response = $this->get('/api/usuarios');

        $response->assertStatus(200);
    }
}
