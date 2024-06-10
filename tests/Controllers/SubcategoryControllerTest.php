<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Subcategory;

class SubcategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_a_specific_subcategory()
    {
        $subcategory = Subcategory::factory()->create();

        $response = $this->get('/subcategories' . $subcategory->id);

        $response->assertStatus(200);
        $response->assertViewIs('subcategories.show');
        $response->assertViewHas('subcategory', $subcategory);
    }
}
