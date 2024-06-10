<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Gloudemans\Shoppingcart\Facades\Cart;

class PedidoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        
        Cart::instance('shopping')->add('293ad', 'Producto de prueba', 1, 9.99, 0, ['image' => 'https://via.placeholder.com/150']);
    }

    /** @test */
    public function finalizar_pedido_vacia_el_carrito_y_redirige_a_la_pagina_de_gracias()
    {
        $response = $this->post(route('finalizar.pedido'));

        $this->assertTrue(Cart::instance('shopping')->content()->isEmpty());

        $response->assertRedirect(route('gracias'));
    }

    /** @test */
    public function la_pagina_de_gracias_es_accesible()
    {
        $response = $this->get(route('gracias'));

        $response->assertStatus(200);
        $response->assertViewIs('gracias');
    }
}