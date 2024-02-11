@extends('layouts/layoutMaster')

@section('title', 'DataTables - Tables')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">
<!-- Form Validation -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<!-- Flat Picker -->
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<!-- Form Validation -->
<script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/tables-datatables-basic.js')}}"></script>
@endsection

@section('content')
<!-- Complex Headers -->
<div class="card">
  <h5 class="card-header"style="text-align:center">List of All Inventory</h5>
  <div class="card-datatable text-nowrap">
    <table class="dt-complex-header table table-bordered">
      <thead>
        <tr>
          <th rowspan="2">Inventory Name</th>
          <th colspan="3" style="text-align:center">Location</th>
          <th colspan="2" style="text-align:center">Contact</th>
          <th rowspan="2">Open Hours</th>
        </tr>
        <tr>
          <th>Region</th>
          <th>Address</th>
          <th>ZIP CODE</th>
          <th>Telephone</th>
          <th>Phone Number</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
      <tr>
        <td><span class="fw-medium">Bestlink Inventory</span></td>
        <td>NCR</td>
        <td>Novaliches Quezon City</td>
        <td>1234</td>
        <td>02XX-XXX-XXX</td>
        <td>09XXXXXXX</td>
        <td>7:00PN ONWARDS</td>
      </tr>
    </table>
  </div>
</div>
<!--/ Complex Headers -->

@endsection
