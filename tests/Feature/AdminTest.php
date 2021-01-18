<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_when_admin_logs_in_redirects_to_dashboard()
    {
        User::factory()->admin()->create();

        $response = $this->post('/login', ["email" => "admin@cancruz.com", "password" => "password"]);

        $response->assertRedirect('/dashboard');
    }
}
