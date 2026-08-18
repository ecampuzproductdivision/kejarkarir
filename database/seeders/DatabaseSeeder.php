<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Roles
        $superAdmin = Role::create([
            'name' => 'SUPER_ADMIN',
            'display_name' => 'Super Admin',
            'description' => 'Full access to all system features',
            'status' => 'active',
            'guard_name' => 'web',
        ]);

        $companyPartner = Role::create([
            'name' => 'COMPANY_PARTNER',
            'display_name' => 'Company Partner',
            'description' => 'Company partner user access level',
            'status' => 'active',
            'guard_name' => 'web',
        ]);

        // 2. Create Test User (Super Admin)
        $userAdmin = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $userAdmin->assignRole('SUPER_ADMIN');

        // 3. Create dummy users associated with Company Partner (e.g. 3 users)
        $partners = User::factory(3)->create();
        foreach ($partners as $partner) {
            $partner->assignRole('COMPANY_PARTNER');
        }

        // 4. Seed the application navigation menus
        $this->call(MenuSeeder::class);

        // 5. Seed common permissions and assign them to the Super Admin role
        $this->call(PermissionSeeder::class);
    }
}
