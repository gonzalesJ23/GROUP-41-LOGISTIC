@extends('layouts/layoutMaster')

@section('title', 'Small Value Procurement')

@section('content')
<div class="card">
    <div class="card-body">
    <h3 class="card-title" style="text-align:center">Small Value Procurement</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Proponent Requests</th>
                    <th scope="col">RFQ Number</th>
                    <th scope="col">Title</th>
                    <th scope="col">Submission Deadline</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ppmSmallValueProcurements as $ppmSmallValueProcurement)
                <tr>
                    <th scope="row">{{ $ppmSmallValueProcurement->id }}</th>
                    <td>{{ $ppmSmallValueProcurement->date_published }}</td>
                    <td>{{ $ppmSmallValueProcurement->proponent_requests }}</td>
                    <td>{{ $ppmSmallValueProcurement->rfq_number }}</td>
                    <td>{{ $ppmSmallValueProcurement->title }}</td>
                    <td>{{ $ppmSmallValueProcurement->submission_deadline }}</td>
                    <td>
                        <a href="{{ route('ppm-small-value-procurements.show', $ppmSmallValueProcurement->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('ppm-small-value-procurements.edit', $ppmSmallValueProcurement->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('ppm-small-value-procurements.destroy', $ppmSmallValueProcurement->id) }}" method="POST" style="display: inline-block;">
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
</div>
<div class="text-center">
    <a href="{{ route('ppm-small-value-procurements.create') }}" class="btn btn-primary btn-md btn-block mt-4">Create Small Value Procurement</a>
  </div>
@endsection
