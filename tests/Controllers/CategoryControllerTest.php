<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Category;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_a_specific_category()
    {
        $category = Category::factory()->create();

        $response = $this->get('/categories' . $category->id);

        $response->assertStatus(200);
        $response->assertViewIs('categories.show');
        $response->assertViewHas('category', $category);
    }
}
