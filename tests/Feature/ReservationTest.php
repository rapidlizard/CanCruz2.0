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

        $response = $this->post('/reservations/create', [
            'name' => $reservation->name,
            'email' => $reservation->email,
            'phone' => $reservation->phone,
            'persons' => $reservation->persons,
            'total_price' => $reservation->total_price
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('reservations', [
            'name' => $reservation->name,
            'email' => $reservation->email,
            'phone' => $reservation->phone,
            'persons' => $reservation->persons,
            'total_price' => $reservation->total_price
        ]);
    }

    public function test_delete_reservation()
    {
        $reservation = Reservation::factory()->create();

        $this->assertDatabaseHas('reservations', [
            'id' => $reservation->id
        ]);

        $response = $this->delete('/reservations/' . $reservation->id);

        $response->assertStatus(302);
        $this->assertDatabaseMissing('reservations', [
            'id' => $reservation->id
        ]);
    }

    public function test_update_reservation()
    {
        $reservation = Reservation::factory()->create();
        $updatedReservation = [
            'name' => 'Francisco'
        ];

        $response = $this->patch('/reservations/'.$reservation->id, $updatedReservation);

        $response->assertRedirect();
        $this->assertDatabaseHas('reservations', [
            'name' => 'Francisco'
        ]);
    }
}