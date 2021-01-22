@extends('layouts.app')

@section('content')
<header class="dashboard-header">
    <h1>Welcome to the dashboard.</h1>
</header>
<section class="categories">
    <a class="category" href="/dashboard/reservations">
        <span>Reservations</span>
    </a>
    <a class="category" href="/dashboard/Rooms">
        <span>Rooms</span>
    </a>
    <a class="category" href="/dashboard/Services">
        <span>Services</span>
    </a>
</section>
@endsection