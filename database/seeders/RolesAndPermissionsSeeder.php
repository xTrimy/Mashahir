<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'publish services']);
        Permission::create(['name' => 'send messages']);
        Permission::create(['name' => 'buy services']);
        Permission::create(['name' => 'manage celebrities']);
        Permission::create(['name' => 'manage all celebrities']);
        Permission::create(['name' => 'send important notifications']);
        Permission::create(['name' => 'manage managers']);
        Permission::create(['name' => 'view all tasks']);
        Permission::create(['name' => 'view all ads']);
        Permission::create(['name' => 'view all transactions']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'celebrity'])
            ->givePermissionTo('publish services');
            
        $role = Role::create(['name' => 'digital marketer'])
        ->givePermissionTo('publish services');

        $role = Role::create(['name' => 'advertising agency'])
        ->givePermissionTo('manage celebrities');

        $role = Role::create(['name' => 'customer'])
            ->givePermissionTo(['buy services','send messages']);

        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo([
                'send important notifications',
                'view all tasks',
                'view all ads',
                'view all transactions',
            ]);

        $role = Role::create(['name' => 'super-admin'])
            ->givePermissionTo(Permission::all());
    }
}
