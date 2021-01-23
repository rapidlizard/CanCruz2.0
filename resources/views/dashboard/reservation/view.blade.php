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
            <label class="form-label">Price</label>
            <input class="form-control" id="disabledInput" type="text" name="total_price" autocomplete="off" value="{{ $reservation->total_price }}" disabled>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a id="back" href>< back</a>
        </div>
    </form>
</main>
@endsection