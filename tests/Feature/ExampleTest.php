<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
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
}
