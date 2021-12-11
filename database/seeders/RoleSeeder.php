<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create(['id'=>Role::ADMIN, 'role'=>'admin']);
        Role::create(['id'=>Role::ACCOUNTANT, 'role'=>'accountant']);
        Role::create(['id'=>Role::CASHIER, 'role'=>'cashier']);
        Role::create(['id'=>Role::MANAGER, 'role'=>'manager']);
    }
}
