<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShippingControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_shipping_index_page()
    {
        $response = $this->get('/shipping');

        $response->assertStatus(200);
        $response->assertViewIs('shipping.index');
    }
}
