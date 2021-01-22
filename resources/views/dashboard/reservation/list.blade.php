@extends('layouts.app')

@section('content')
<header class="dashboard-header">
    <h1>Reservations</h1>
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
</main>
<footer>
    <a id="back" href>< back</a>
</footer>
@endsection