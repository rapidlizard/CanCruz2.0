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
        $reservations = Reservation::all(); 

        return view('dashboard.reservation.list', ['reservations' => $reservations]);
    }
}
