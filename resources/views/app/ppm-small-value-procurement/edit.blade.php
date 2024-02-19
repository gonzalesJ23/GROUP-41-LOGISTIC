@extends('layouts/layoutMaster')

@section('title', 'Edit Small Value Procurement')

@section('content')
<div class="card">
    <div class="card-body">
    <h3 class="card-title" style="text-align:center">Edit Small Value Procurement</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('ppm-small-value-procurements.update', $ppmSmallValueProcurement->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="date_published">Date Published</label>
                <input type="date" name="date_published" id="date_published" class="form-control" value="{{ $ppmSmallValueProcurement->date_published }}" required>
            </div>
            <div class="form-group">
                <label for="proponent_requests">Proponent Requests</label>
                <textarea name="proponent_requests" id="proponent_requests" class="form-control">{{ $ppmSmallValueProcurement->proponent_requests }}</textarea>
            </div>
            <div class="form-group">
                <label for="rfq_number">RFQ Number</label>
                <input type="text" name="rfq_number" id="rfq_number" class="form-control" value="{{ $ppmSmallValueProcurement->rfq_number }}" required>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $ppmSmallValueProcurement->title }}" required>
            </div>
            <div class="form-group">
                <label for="submission_deadline">Submission Deadline</label>
                <input type="datetime-local" name="submission_deadline" id="submission_deadline" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($ppmSmallValueProcurement->submission_deadline)) }}" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-md btn-block mt-4">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
