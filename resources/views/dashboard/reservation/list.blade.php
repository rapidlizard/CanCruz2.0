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
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->total_price }}</td>
                <td class="table-actions">
                    <form action="/dashboard/reservations/view/{{ $reservation->id }}" method="get">
                        <button type="submit" class="btn">
                            <i class="bi bi-eye text-primary" style="font-size: 20px"></i>
                        </button>
                    </form>
                    <form action="/dashboard/reservations/edit/{{ $reservation->id }}" method="get">
                        @csrf
                        <button type="submit" class="btn">
                            <i class="bi bi-pencil text-success" style="font-size: 20px"></i>
                        </button>
                    </form>
                    <form action="/reservations/{{ $reservation->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn">
                            <i class="bi bi-trash text-danger" style="font-size: 20px"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a id="back" href>< back</a>
</main>
@endsection