@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Small Value Procurement')

@section('content')
<!-- Table without card -->
<h4 class="mb-4">Small Value Procurement</h4>
<div class="table-responsive text-nowrap">
  <table class="table card-table">
    <thead>
    <h4 class="mb-4" style="text-align:center"> Main Office Procurement Opportunities </h4>
      <tr>
        <th>Date Published</th>
        <th>Proponent/Requesting Department/Branch</th>
        <th>RFQ Number</th>
        <th>Title</th>
        <th>Deadline of Submission of Quotations</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      <tr>
        <td><span class="fw-medium">06/01/2023</span></td>
        <td>Main</td>
        <td>24-01-004</td>
        <td>17 LOT, CANUMAY WEST PROPERTY</td>
        <td span style="text-align:center">JANUARY 26, 2024 @ 10:00 AM </span></td>
      </tr>
      <tr>
        <td><span class="fw-medium">06/01/2023</span></td>
        <td>Main</td>
        <td>24-01-004</td>
        <td>17 LOT, CANUMAY WEST PROPERTY</td>
        <td span style="text-align:center">JANUARY 26, 2024 @ 10:00 AM </span></td>
      </tr>
      <tr>
        <td><span class="fw-medium">06/01/2023</span></td>
        <td>Main</td>
        <td>24-01-004</td>
        <td>17 LOT, CANUMAY WEST PROPERTY</td>
        <td span style="text-align:center">JANUARY 26, 2024 @ 10:00 AM </span></td>
      </tr>
      <tr>
        <td><span class="fw-medium">06/01/2023</span></td>
        <td>Main</td>
        <td>24-01-004</td>
        <td>17 LOT, CANUMAY WEST PROPERTY</td>
        <td span style="text-align:center">JANUARY 26, 2024 @ 10:00 AM </span></td>
      </tr>
    </tbody>
  </table>
</div>
<!--/ Table without card -->
@endsection
