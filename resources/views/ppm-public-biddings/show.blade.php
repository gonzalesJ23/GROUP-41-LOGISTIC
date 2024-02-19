@extends('layouts/layoutMaster')

@section('content')
    <h1>Public Bidding Details</h1>

    <table class="table mt-4">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $publicBidding->id }}</td>
            </tr>
            <tr>
                <th>Bid Document</th>
                <td>{{ $publicBidding->bid_document }}</td>
            </tr>
            <tr>
                <th>Bid Start</th>
                <td>{{ $publicBidding->bid_start }}</td>
            </tr>
            <tr>
                <th>Bid End</th>
                <td>{{ $publicBidding->bid_end }}</td>
            </tr>
            <tr>
                <th>Bid Status</th>
                <td>{{ $publicBidding->bid_status }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('ppm-public-biddings.index') }}" class="btn btn-primary">Back to List</a>
@endsection
