<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_HomePage_loads()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeText('hello from index');
    }
}
