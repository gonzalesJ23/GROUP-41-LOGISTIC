@extends('layouts/layoutMaster')

@section('title', 'Create New Small Value Procurement')

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="text-align:center">Create New Small Value Procurement</h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('ppm-small-value-procurements.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="date_published">Date Published</label>
                <input type="date" name="date_published" id="date_published" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="proponent_requests">Proponent Requests</label>
                <textarea name="proponent_requests" id="proponent_requests" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="rfq_number">RFQ Number</label>
                <input type="text" name="rfq_number" id="rfq_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="submission_deadline">Submission Deadline</label>
                <input type="datetime-local" name="submission_deadline" id="submission_deadline" class="form-control" required>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit"class="btn btn-primary btn-md btn-block mt-4">Create</button>
            </div>
        </form>
    </div>
</div>
<a href="{{ route('ppm-small-value-procurements.index') }}" class="btn btn-secondary btn-md btn-block mt-4">Back</a>
@endsection
