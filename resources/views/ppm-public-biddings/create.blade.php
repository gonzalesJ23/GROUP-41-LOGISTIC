@extends('layouts/layoutMaster')

@section('title', 'Create New Public Bidding')


@section('content')
    <h1>Create New Public Bidding</h1>

    <form action="{{ route('ppm-public-biddings.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="bid_document">Bid Document</label>
            <input type="text" name="bid_document" id="bid_document" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="bid_start">Bid Start</label>
            <input type="datetime-local" name="bid_start" id="bid_start" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="bid_end">Bid End</label>
            <input type="datetime-local" name="bid_end" id="bid_end" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="bid_status">Bid Status</label>
            <select name="bid_status" id="bid_status" class="form-control" required>
                <option value="open">Open</option>
                <option value="closed">Closed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
