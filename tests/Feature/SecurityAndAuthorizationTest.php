<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Role;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SecurityAndAuthorizationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Seed the roles, permissions, menus, pages, etc.
        $this->seed(DatabaseSeeder::class);
    }

    /**
     * Test that SUPER_ADMIN can access settings.
     */
    public function test_super_admin_can_access_users_management(): void
    {
        $admin = User::whereHas('roles', function($q) {
            $q->where('name', 'SUPER_ADMIN');
        })->first();

        $response = $this->actingAs($admin)
            ->get(route('users.index'));

        $response->assertStatus(200);
    }

    /**
     * Test that COMPANY_PARTNER (who has no USER_VIEW permission) gets 403.
     */
    public function test_company_partner_is_forbidden_from_users_management(): void
    {
        $partner = User::whereHas('roles', function($q) {
            $q->where('name', 'COMPANY_PARTNER');
        })->first();

        $response = $this->actingAs($partner)
            ->get(route('users.index'));

        $response->assertStatus(403);
    }

    /**
     * Test that login route has rate limiting active.
     */
    public function test_login_route_rate_limiting(): void
    {
        // Make 5 requests to /login which are allowed
        for ($i = 0; $i < 5; $i++) {
            $response = $this->post('/login', [
                'email' => 'wrong@example.com',
                'password' => 'secret',
            ]);
            $response->assertStatus(302); // Redirect back due to validation exception
        }

        // The 6th request should trigger rate limit (429 Too Many Requests)
        $response = $this->post('/login', [
            'email' => 'wrong@example.com',
            'password' => 'secret',
        ]);
        $response->assertStatus(429);
    }
}
