<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PizzaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/pizzas');

        $response->assertStatus(200);
    }

      /**@test */
      //https://laravel.com/docs/8.x/http-tests
      public function get_all_pizzas_route_return()
      {
          $response = $this->get('/pizzas');
          $response->assertSee('Pizza');
      }
}
