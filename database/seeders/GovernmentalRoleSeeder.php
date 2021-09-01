<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class GovernmentalRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name'=>"governmental organization"])->givePermissionTo([
            'manage all celebrities',
            'manage managers',
            'send important notifications',
            'view all tasks',
            'view all ads',
            'view all transactions',
        ]);
    }
}
