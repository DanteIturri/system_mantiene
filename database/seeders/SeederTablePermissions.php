<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Spatie
use Spatie\Permission\Models\Permission;

class SeederTablePermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // Seeder Role Permission
            'view-role',
            'create-role',
            'edir-role',
            'deleted-role',

            'view-branch',
            'create-branch',
            'edir-branch',
            'deleted-branch',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
