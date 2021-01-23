@extends('layouts.app')

@section('content')
<header class="dashboard-header d-flex justify-content-between align-items-center">
    <h1>View the reservation.</h1>
</header>
<main>
    <form>
        @csrf
        @method('patch')
        <div class="form-group">
            <label class="form-label">Name</label>
            <input class="form-control" id="disabledInput" type="text" name="name" autocomplete="off" value="{{ $reservation->name }}" disabled>
        </div>

        <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-control" type="email" name="email" autocomplete="off" value="{{ $reservation->email }}" disabled>
        </div>

        <div class="form-group">
            <label class="form-label">Phone</label>
            <input class="form-control" type="text" name="phone" autocomplete="off" value="{{ $reservation->phone }}" disabled>
        </div>

        <div class="form-group">
            <label class="form-label">Number of people</label>
            <input class="form-control" type="text" name="persons" autocomplete="off" value="{{ $reservation->persons }}" disabled>
        </div>

        <div class="form-group">
            <label class="form-label">Price</label>
            <input class="form-control" id="disabledInput" type="text" name="total_price" autocomplete="off" value="{{ $reservation->total_price }}" disabled>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a id="back" href="/dashboard/reservations">< back</a>
        </div>
    </form>
</main>
@endsection