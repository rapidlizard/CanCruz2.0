<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }

    public function reservations()
    {
        return view('dashboard.reservation.list', ['reservations' => Reservation::all()]);
    }

    public function createReservation()
    {
        return view('dashboard.reservation.create');
    }

    public function editReservation(Reservation $reservation)
    {
        return view('dashboard.reservation.edit', ['reservation' => $reservation]);
    }

    public function viewReservation(Reservation $reservation)
    {
        return view('dashboard.reservation.view', ['reservation' => $reservation]);
    }
}
