<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CartControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_cart_index_page()
    {
        $response = $this->get('/cart');

        $response->assertStatus(200);
        $response->assertViewIs('cart.index');
    }
}
