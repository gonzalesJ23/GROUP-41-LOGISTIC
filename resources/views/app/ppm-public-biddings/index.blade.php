@extends('layouts/layoutMaster')

@section('title', 'Public Bidding')

@section('content')
  <div class="card">
    <table class="table card-table">
    <h3 class="card-title" style="text-align:center">Public Bidding</h3>
        <thead>
            <tr>
                <th>ID</th>
                <th>Bid Document</th>
                <th>Bid Start</th>
                <th>Bid End</th>
                <th>Bid Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publicBiddings as $publicBidding)
                <tr>
                    <td>{{ $publicBidding->id }}</td>
                    <td>{{ $publicBidding->bid_document }}</td>
                    <td>{{ $publicBidding->bid_start }}</td>
                    <td>{{ $publicBidding->bid_end }}</td>
                    <td>{{ $publicBidding->bid_status }}</td>
                    <td>
                        <a href="{{ route('ppm-public-biddings.show', $publicBidding->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('ppm-public-biddings.edit', $publicBidding->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('ppm-public-biddings.destroy', $publicBidding->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>

  <div class="text-center">
    <a href="{{ route('ppm-public-biddings.create') }}" class="btn btn-primary btn-md btn-block mt-4">New Public Bidding Listing</a>
  </div>
@endsection
