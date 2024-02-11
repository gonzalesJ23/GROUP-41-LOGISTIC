@extends('layouts/layoutMaster')

@section('title', 'Create Purchase Order')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-wizard-numbered.js')}}"></script>
<script src="{{asset('assets/js/form-wizard-validation.js')}}"></script>
@endsection

@section('content')
<h4 class="mb-4"style="text-align:center" >Create Purchase Order</h4>
<!-- Default -->
<div class="row">

  <!-- Default Wizard -->
  <div class="col-12 mb-4">
    <div class="bs-stepper wizard-numbered mt-2">
      <div class="bs-stepper-header">
        <div class="step" data-target="#account-details">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">1</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Buyer Details</span>
              <span class="bs-stepper-subtitle"></span>
            </span>
          </button>
        </div>
        <div class="line">
          <i class="ti ti-chevron-right"></i>
        </div>
        <div class="step" data-target="#personal-info">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">2</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Vendor Info</span>
            </span>

          </button>
        </div>
        <div class="line">
          <i class="ti ti-chevron-right"></i>
        </div>
        <div class="step" data-target="#social-links">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">3</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Ship To</span>
            </span>
          </button>
        </div>
      </div>
      <div class="bs-stepper-content">
        <form onSubmit="return false">
          <!-- Account Details -->
          <div id="account-details" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Buyer Details</h6>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="Company Name">Company Name</label>
                <input type="text" id="Company Name" class="form-control" placeholder="BBOX Corps." />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="Address">Address</label>
                <input type="text" id="Address" class="form-control" placeholder="Valenzuela City" />
              </div>
              <div class="col-sm-6 form-tel-toggle">
                <label class="form-label" for="Phone">Phone</label>
                <div class="input-group input-group-merge">
                  <input type="tel" id="Phone" class="form-control" placeholder="09XXXXXXX"/>
                </div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="Website">Website</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="Website" class="form-control" placeholder="www.xxx.com"/>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- Personal Info -->
          <div id="personal-info" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Vendor Info</h6>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="Company-name">Company Name</label>
                <input type="text" id="Company-name" class="form-control" placeholder="BBOX Corp." />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="Other-Details">Supply Name</label>
                <input type="text" id="Other-Details" class="form-control" placeholder="Description" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="Supply">Supply Type</label>
                <select class="select2" id="Supply">
                  <option label=" "></option>
                  <option>Logistic Support</option>
                  <option>Food</option>
                  <option>Transportation </option>
                  <option>Operations Support </option>
                  <option>Raw Product</option>
                  <option>Finnish Product</option>
                  <option>Goods</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="Quantity">Quantity</label>
                <input type="text" id="Quantity" class="form-control" placeholder="1pcs" />
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- Social Links -->
          <div id="social-links" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Ship To</h6>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="name">Name</label>
                <input type="text" id="name" class="form-control" placeholder="Ken Sacriz" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="company-name-name">Company Name</label>
                <input type="text" id="company-name-name" class="form-control" placeholder="BBOX Corp." />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="Address-name">Address</label>
                <input type="text" id="Address-name" class="form-control" placeholder="Valenzuela City" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="zip">Zip Code</label>
                <input type="text" id="zip" class="form-control" placeholder="1443" />
              </div>
              <div class="col-sm-6 ">
                <label class="form-label" for="Phone-phone">Phone Number</label>
                <input type="text" id="Phone-phone" class="form-control" placeholder="09XXXXXXXXX" />
              </div>
              <div class="col-sm-6 ">
                <label class="form-label" for="Other-Details">Other Details</label>
                <input type="text" id="Other-Details" class="form-control" placeholder="Description" />
              </div>
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-success btn-submit">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Default Wizard -->
</div>
@endsection
