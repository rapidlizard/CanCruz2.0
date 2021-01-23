@extends('layouts.app')

@section('content')
<header class="dashboard-header d-flex justify-content-between align-items-center">
    <h1>Edit the reservation.</h1>
</header>
<main>
    <form action="/reservations/create" method="post">
        @csrf
        <div class="form-group">
            <label class="form-label">Name</label>
            <input class="form-control" type="text" name="name" autocomplete="off" value="{{ $reservation->name }}">
        </div>

        <div class="form-group">
            <label class="form-label">Price</label>
            <input class="form-control" type="text" name="total_price" autocomplete="off" value="{{ $reservation->total_price }}">
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a id="back" href>< back</a>
            <input class="btn btn-primary" type="submit" value="Edit">
        </div>
    </form>
</main>
@endsection