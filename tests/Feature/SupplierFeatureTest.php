<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\Supplier;
use App\Models\User;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Inertia\Testing\Assert;
use Tests\TestCase;

class SupplierFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function supplier_can_be_create()
    {
        Supplier::factory()->create(['name' => 'totally_random_name']);

        $this->assertDatabaseHas('suppliers', ['name' => 'totally_random_name']);
    }

    /** @test */
    public function can_show_supplier_create_form()
    {
        Role::create(['id' => Role::MANAGER, 'role' => 'manager']);
        $manager = User::factory()->create(['role_id' => Role::MANAGER]);
        $this->actingAs($manager);

        $response = $this->get(route('suppliers.create'));

        $response->assertInertia(function (Assert $page) {
            $page->component('Supplier/Create');
        });
    }

    /** @test */
    public function a_supplier_can_be_store()
    {
        Role::create(['id' => Role::MANAGER, 'role' => 'manager']);
        $manager = User::factory()->create(['role_id' => Role::MANAGER]);
        $this->actingAs($manager);

        $data = [
            'name' => 'test supplier',
            'email' => 'test@gmail.com',
            'contact_no_1' => '0771234567',
            'contact_no_2' => '0771234567',
            'address' => 'colombo 7, sri lanka',
            'notes' => '',
        ];

        $response = $this->post(route('suppliers.store', $data));

        $this->assertDatabaseHas('suppliers', [
            'name' => 'test supplier',
            'email' => 'test@gmail.com',
            'contact_no_1' => '0771234567',
            'contact_no_2' => '0771234567',
            'address' => 'colombo 7, sri lanka',
        ]);
    }

    /** @test */
    public function prevent_unauthorized_access_of_create_suppliers()
    {
        $admin = User::factory()
            ->for(Role::create(['id' => Role::ADMIN, 'role' => 'admin']))
            ->create();
        $accountant = User::factory()
            ->for(Role::create(['id' => Role::ACCOUNTANT, 'role' => 'accountant']))
            ->create();
        $cashier = User::factory()
            ->for(Role::create(['id' => Role::CASHIER, 'role' => 'cashier']))
            ->create();
        $manager = User::factory()
            ->for(Role::create(['id' => Role::MANAGER, 'role' => 'manager']))
            ->create();

        $response = $this->actingAs($admin)->get(route('suppliers.create'));
        $response->assertStatus(403);

        $response = $this->actingAs($accountant)->get(route('suppliers.create'));
        $response->assertStatus(403);

        $response = $this->actingAs($cashier)->get(route('suppliers.create'));
        $response->assertStatus(403);

        $response = $this->actingAs($manager)->get(route('suppliers.create'));
        $response->assertStatus(200);

        $data = [
            'name' => 'test supplier',
            'email' => 'test@gmail.com',
            'contact_no_1' => '0771234567',
            'contact_no_2' => '0771234567',
            'address' => 'colombo 7, sri lanka',
            'notes' => '',
        ];

        $response = $this
            ->actingAs($admin)
            ->post(route('suppliers.store', $data));
        $response->assertStatus(403);

        $response = $this
            ->actingAs($accountant)
            ->post(route('suppliers.store', $data));
        $response->assertStatus(403);

        $response = $this
            ->actingAs($cashier)
            ->post(route('suppliers.store', $data));
        $response->assertStatus(403);

        $response = $this
            ->actingAs($manager)
            ->post(route('suppliers.store', $data));
        $response->assertStatus(200);
    }

    /** @test */
    public function a_supplier_can_be_deleted()
    {
        Role::create(['id' => Role::MANAGER, 'role' => 'manager']);
        $manager = User::factory()->create(['role_id' => Role::MANAGER]);
        $supplier = Supplier::factory()->create();

        $this->actingAs($manager)
            ->delete(route('suppliers.destroy', $supplier));

        $this->assertNull($supplier->fresh());
    }

    /** @test */
    public function prevent_unauthorized_delete()
    {
        $admin = User::factory()
            ->for(Role::create(['id' => Role::ADMIN, 'role' => 'admin']))
            ->create();

        $accountant = User::factory()
            ->for(Role::create(['id' => Role::ACCOUNTANT, 'role' => 'accountant']))
            ->create();

        $cashier = User::factory()
            ->for(Role::create(['id' => Role::CASHIER, 'role' => 'cashier']))
            ->create();

        $manager = User::factory()
            ->for(Role::create(['id' => Role::MANAGER, 'role' => 'manager']))
            ->create();

        $suppliers = Supplier::factory(4)->create();

        $response = $this
            ->actingAs($admin)
            ->delete(route('suppliers.destroy', $suppliers[0]));
        $response->assertStatus(403);
        $this->assertEquals(4,Supplier::count());

        $response = $this
            ->actingAs($cashier)
            ->delete(route('suppliers.destroy', $suppliers[1]));
        $response->assertStatus(403);
        $this->assertEquals(4,Supplier::count());

        $response = $this
            ->actingAs($manager)
            ->delete(route('suppliers.destroy', $suppliers[2]));
        $response->assertStatus(200);
        $this->assertEquals(3,Supplier::count());

        $response = $this
            ->actingAs($accountant)
            ->delete(route('suppliers.destroy', $suppliers[3]));
        $response->assertStatus(403);
        $this->assertEquals(3,Supplier::count());
    }
}
