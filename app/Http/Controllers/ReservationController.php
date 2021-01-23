<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $reservation = Reservation::create([
            'name' => $request->name,
            'total_price' => $request->total_price
        ]);

        return redirect('/dashboard/reservations');
    }

    public function delete(Reservation $reservation)
    {
        $reservation->delete();

        return redirect('/dashboard/reservations');
    }

    public function update(Reservation $reservation, Request $request)
    {
        $reservation->update($request->all());

        return redirect('dashboard/reservations');
    }
}
