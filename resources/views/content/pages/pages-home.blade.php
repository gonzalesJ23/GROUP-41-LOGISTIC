@extends('layouts/layoutMaster')

@section('title', 'Overview')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/chartjs/chartjs.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/charts-chartjs.js')}}"></script>
@endsection

@section('content')

<div class="row">
  <!-- Bar Charts -->
  <div class="col-xl-6 col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Procurement Overview</h5>
        <div class="card-action-element ms-auto py-0">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-calendar"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="barChart" class="chartjs" data-height="400"></canvas>
      </div>
    </div>
  </div>
  <!-- /Bar Charts -->

  <!-- Horizontal Bar Charts -->
  <div class="col-xl-6 col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <div class="d-flex flex-column">
          <p class="card-subtitle text-muted mb-1">Purchase Overview</p>
          <h5 class="card-title mb-0">PHP 69,201</h5>
        </div>
        <div class="card-action-element ms-auto py-0">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-calendar"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="horizontalBarChart" class="chartjs" data-height="400"></canvas>
      </div>
    </div>
  </div>
  <!-- /Horizontal Bar Charts -->

  <!-- Line Charts -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header header-elements">
        <div>
          <h5 class="card-title mb-0">Inventory Overview</h5>
          <small class="text-muted">ALL INVENTORY</small>
        </div>
        <div class="card-header-elements ms-auto py-0">
          <h5 class="mb-0 me-3">PHP 21,451</h5>
          <span class="badge bg-label-secondary">
            <i class='ti ti-arrow-up ti-xs text-success'></i>
            <span class="align-middle">37%</span>
          </span>
        </div>
      </div>
      <div class="card-body pt-2">
        <canvas id="lineChart" class="chartjs" data-height="500"></canvas>
      </div>
    </div>
  </div>
  <!-- /Line Charts -->


  <!-- Scatter Chart -->
  <div class="col-12 mb-4">
    <div class="card">
      <div class="card-header flex-nowrap header-elements">
        <h5 class="card-title mb-0">Inventory Product Overview</h5>
        <div class="card-header-elements ms-auto py-0 d-none d-sm-block">
          <div class="btn-group" role="group" aria-label="radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="dailyRadio" checked>
            <label class="btn btn-outline-secondary" for="dailyRadio">Daily</label>

            <input type="radio" class="btn-check" name="btnradio" id="monthlyRadio">
            <label class="btn btn-outline-secondary" for="monthlyRadio">Monthly</label>

            <input type="radio" class="btn-check" name="btnradio" id="yearlyRadio">
            <label class="btn btn-outline-secondary" for="yearlyRadio">Yearly</label>
          </div>
        </div>
      </div>
      <div class="card-body pt-2">
        <canvas id="scatterChart" class="chartjs" data-height="435"></canvas>
      </div>
    </div>
  </div>
  <!-- /Scatter Chart -->
</div>
@endsection