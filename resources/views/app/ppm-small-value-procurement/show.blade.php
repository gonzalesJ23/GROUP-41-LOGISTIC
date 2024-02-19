<!-- resources/views/ppm-small-value-procurement/show.blade.php -->
@extends('layouts/layoutMaster')


@section('content')
    <h1>PPM Small Value Procurement Details</h1>

    <table class="table">
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{ $ppmSmallValueProcurement->id }}</td>
            </tr>
            <tr>
                <th scope="row">Date Published</th>
                <td>{{ $ppmSmallValueProcurement->date_published }}</td>
            </tr>
            <tr>
                <th scope="row">Proponent Requests</th>
                <td>{{ $ppmSmallValueProcurement->proponent_requests }}</td>
            </tr>
            <tr>
                <th scope="row">RFQ Number</th>
                <td>{{ $ppmSmallValueProcurement->rfq_number }}</td>
            </tr>
            <tr>
                <th scope="row">Title</th>
                <td>{{ $ppmSmallValueProcurement->title }}</td>
            </tr>
            <tr>
                <th scope="row">Submission Deadline</th>
                <td>{{ $ppmSmallValueProcurement->submission_deadline }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('ppm-small-value-procurements.index') }}" class="btn btn-secondary">Back</a>
@endsection
