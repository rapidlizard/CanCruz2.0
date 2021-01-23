@extends('layouts.app')

@section('content')
<header class="dashboard-header d-flex justify-content-between align-items-center">
    <h1>Create a reservation.</h1>
</header>
<main>
    <form action="/reservations/create" method="post">
        @csrf
        <div class="form-group">
            <label class="form-label">Name</label>
            <input class="form-control" type="text" name="name" autocomplete="off">
        </div>

        <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-control" type="email" name="email" autocomplete="off">
        </div>

        <div class="form-group">
            <label class="form-label">Phone</label>
            <input class="form-control" type="text" name="phone" autocomplete="off">
        </div>

        <div class="form-group">
            <label class="form-label">Number of people</label>
            <select class="form-control" name="persons" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>

        <div class="form-group">
            <label class="form-label">Price</label>
            <input class="form-control" type="text" name="total_price" autocomplete="off">
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a id="back" href="/dashboard/reservations">< back</a>
            <input class="btn btn-primary" type="submit" value="Create">
        </div>
    </form>
</main>
@endsection