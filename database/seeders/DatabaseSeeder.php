<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $company =  Companies::create(['company_name' => 'Bleron LLC']);

        Permission::create(['name' => 'import csv']);
        Permission::create(['name' => 'quality check']);
        Permission::create(['name' => 'confirmation check']);
        Permission::create(['name' => 'call agent check']);
        Permission::create(['name' => 'seller']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'see all leads']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'upload audio']);
        // Permission::create(['name' => 'edit users']);
        // Permission::create(['name' => 'delete users']);
        // Permission::create(['name' => 'edit role']);
        // Permission::create(['name' => 'remove role']);



        $role = Role::create(['name' => 'Super Admin']);

        $role->syncPermissions([
            'import csv',
            'quality check',
            'confirmation check',
            'seller',
            'create users',
            'create role',
            'call agent check',
            'see all leads'
        ]);

        $user = User::create([
            'name' => 'Admin',
            'company_id' => $company->id,
            'email' => 'admin@admin.com',
            'password' => Hash::make('123123')
        ]);
        $user->assignRole($role);
    }
}
