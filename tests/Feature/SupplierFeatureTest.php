<?php

namespace Tests\Feature;

use App\Models\Supplier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SupplierFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function supplier_can_be_create()
    {
        Supplier::factory()->create(['name'=>'totally_random_name']);

        $this->assertDatabaseHas('suppliers',['name'=>'totally_random_name']);
    }
}
