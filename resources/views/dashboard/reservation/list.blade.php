@extends('layouts.app')

@section('content')
<header class="dashboard-header d-flex justify-content-between align-items-center">
    <h1>Reservations</h1>
    <a class="btn btn-primary" href="/dashboard/reservations/create">Create</a>
</header>
<main>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->total_price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a id="back" href>< back</a>
</main>
@endsection