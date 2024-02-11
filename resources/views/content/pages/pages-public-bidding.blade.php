@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Public Bidding')

@section('content')

<!-- Table without card -->
<h4 class="mb-4" style="text-align:center" >Public Bidding</h4>
<div class="table-responsive text-nowrap">
  <table class="table card-table">
    <thead>
      <tr>
        <th>Bid Document</th>
        <th>Bid Start</th>
        <th>Bid End</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      <tr>
        <td><span class="fw-medium">LALAMOVE</span></td>
        <td>06/01/2023</td>
        <td>06/03/2023</td>
        <td><span class="badge bg-label-primary me-1">Active</span></td>
      </tr>
      <tr>
        <td><span class="fw-medium">Bbox Corp</span></td>
        <td>06/01/2023</td>
        <td>06/03/2023</td>
        <td><span class="badge bg-label-success me-1">Completed</span></td>
      </tr>
      <tr>
        <td><span class="fw-medium">Angkas</span></td>
        <td>06/01/2023</td>
        <td>06/03/2023</td>
        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
      </tr>
      <tr>
      <td><span class="fw-medium">Grab</span></td>
        <td>06/01/2023</td>
        <td>06/03/2023</td>
        <td><span class="badge bg-label-warning me-1">Pending</span></td>
      </tr>
    </tbody>
  </table>
</div>
<!--/ Table without card -->
@endsection
