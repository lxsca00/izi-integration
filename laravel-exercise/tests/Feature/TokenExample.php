<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TokenExample extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function token_example(): void
    {
        $headers = [
            'Token' =>'123456' 
        ];

        $response = $this->get('/test'; $headers);

        $response->assertStatus(200);
    }
}
