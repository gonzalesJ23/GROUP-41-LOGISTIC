@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Inventory for Sale/Lease')


@section('content')
<!-- Table without card -->
<h4 class="mb-4" style="text-align:center" >Inventory for Sale/Lease</h4>
<div class="table-responsive text-nowrap">
  <table class="table card-table">
    <thead>
      <tr>
        <th>Inventory for Lease	</th>
        <th>Description</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      <tr>
        <td><span class="fw-medium">Inventories For Lease</span></td>
        <td>Real and Other Properties Acquired for Lease</td>
        <td>January 2024</td>
      </tr>
      <tr>
        <td><span class="fw-medium">Inventories For Lease</span></td>
        <td>Real and Other Properties Acquired for Lease</td>
        <td>January 2024</td>
      </tr>
      <tr>
        <td><span class="fw-medium">Inventories For Lease</span></td>
        <td>Real and Other Properties Acquired for Lease</td>
        <td>January 2024</td>
      </tr>
      <tr>
        <td><span class="fw-medium">Inventories For Lease</span></td>
        <td>Real and Other Properties Acquired for Lease</td>
        <td>January 2024</td>
      </tr>
    </tbody>
  </table>
</div>
<!--/ Table without card -->
@endsection
