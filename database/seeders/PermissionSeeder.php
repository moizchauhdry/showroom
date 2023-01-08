<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'dashboard',
            'role-list',
            'role-create',
            'role-edit',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'invoice-list',
            'invoice-create',
            'invoice-edit',
            'invoice-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
