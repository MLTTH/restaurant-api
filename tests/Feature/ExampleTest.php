<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    /**@test */

    public function about_route_return()
    {
        $response = $this->get('/about');
        $response->assertSee('About');
    }
}
