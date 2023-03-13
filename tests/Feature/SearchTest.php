<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_bring_all_products()
    {
        $response = $this->getJson(route('api.products.all'));
        $response->assertOk();
        $response->assertJsonStructure([[
            'id',
            'name',
            'image',
            'price'
        ]]);
    }

    public function test_bring_product_by_id()
    {
        $response = $this->getJson(route('api.products.byId', 1));
        $response->assertOk();
        $response->assertJsonStructure([
            'id',
            'name',
            'image',
            'price'
        ]);
    }
}
