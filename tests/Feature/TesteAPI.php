<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TesteAPI extends TestCase
{
    public function testeINSERT100Rows()
    {
        $response = $this->post('/api/kaio');

        $response->assertStatus(200);
    }
    
    public function testeSELECT100Rows()
    {
        $response = $this->get('/api/kaio');
        
        $response->assertStatus(200);
    }
    
    public function testeINSERT200Rows()
    {
        $response = $this->post('/api/kaio200');
    
        $response->assertStatus(200);
    }

    public function testeSELECT200Rows()
    {
        $response = $this->get('/api/kaio200');
        
        $response->assertStatus(200);
    }

    public function testeINSERT1000Rows()
    {
        $response = $this->post('/api/kaio1000');
    
        $response->assertStatus(200);
    }

    public function testeSELECT1000Rows()
    {
        $response = $this->get('/api/kaio1000');
        
        $response->assertStatus(200);
    }

}
