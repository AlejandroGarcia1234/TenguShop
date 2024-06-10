<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Family;

class FamilyControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_a_specific_family()
    {
        $family = Family::factory()->create();

        $response = $this->get('/families' . $family->id);

        $response->assertStatus(200);
        $response->assertViewIs('families.show');
        $response->assertViewHas('family', $family);
    }
}
