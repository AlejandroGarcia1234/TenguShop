<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Cover;
use App\Models\Product;

class WelcomeControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_the_welcome_page()
    {
        Cover::factory()->create(['is_active' => true, 'start_at' => now()->subDay(), 'end_at' => now()->addDay()]);
        Product::factory()->create();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('welcome');
        $response->assertViewHas('covers');
        $response->assertViewHas('lastProducts');
    }
}
