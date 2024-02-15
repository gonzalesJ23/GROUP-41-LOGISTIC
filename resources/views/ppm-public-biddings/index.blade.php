@extends('layouts/layoutMaster')

@section('content')
    <h1>Public Biddings</h1>

    <a href="{{ route('ppm-public-biddings.create') }}" class="btn btn-primary">Create New Public Bidding</a>

    <table class="table mt-4">
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
                        <a href="{{ route('public-biddings.show', $publicBidding->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('public-biddings.edit', $publicBidding->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('public-biddings.destroy', $publicBidding->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
