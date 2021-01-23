<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Reservation;

class ReservationTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_reservation()
    {
        $reservation = Reservation::factory()->make();

        $response = $this->post('/reservations/create', ['name' => $reservation->name, 'total_price' => $reservation->total_price]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('reservations', [
            'name' => $reservation->name,
            'total_price' => $reservation->total_price
        ]);
    }
}