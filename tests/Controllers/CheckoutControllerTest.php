<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CheckoutControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_checkout_index_page()
    {
        $response = $this->get('/checkout');

        $response->assertStatus(200);
        $response->assertViewIs('checkout.index');
    }
}
