<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Reservation;

class AdminDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_access_dashboard()
    {
        $user = User::factory()->admin()->create();

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
        $response->assertViewIs('dashboard.home');
    }

    public function test_admin_logs_in_redirects_to_dashboard()
    {
        User::factory()->admin()->create();

        $response = $this->post('/login', ["email" => "admin@cancruz.com", "password" => "password"]);

        $response->assertRedirect('/dashboard');
    }

    public function test_no_login_redirects_to_login_page()
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');
    }

    public function test_admin_access_reservation_list()
    {
        $user = User::factory()->admin()->create();

        $response = $this->actingAs($user)->get('/dashboard/reservations');

        $response->assertStatus(200);
        $response->assertViewIs('dashboard.reservation.list');
    }

    public function test_admin_access_reservation_create()
    {
        $user = User::factory()->admin()->create();

        $response = $this->actingAs($user)->get('/dashboard/reservations/create');

        $response->assertStatus(200);
        $response->assertViewIs('dashboard.reservation.create');
    }

    public function test_admin_access_reservation_edit()
    {
        $user = User::factory()->admin()->create();
        $reservation = Reservation::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard/reservations/edit/' . $reservation->id);

        $response->assertStatus(200);
        $response->assertViewIs('dashboard.reservation.edit');
        $response->assertViewHasAll([
            'reservation' => $reservation 
        ]);
    }

    public function test_admin_access_reservation_view()
    {
        $user = User::factory()->admin()->create();
        $reservation = Reservation::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard/reservations/view/' . $reservation->id);

        $response->assertStatus(200);
        $response->assertViewIs('dashboard.reservation.view');
        $response->assertViewHasAll([
            'reservation' => $reservation 
        ]);
    }
}
