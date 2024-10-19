@extends('backend.layouts.admin-master')
@section('title','Add Package')

@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Packages</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Catalog</a></li>
                                <li class="breadcrumb-item active">Add Package</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">New Package
                                <a class="btn btn-danger float-end" href="{{route('admin.catelog.index')}}"> <i class="ri-arrow-left-fill" ></i>  Back</a>
                            </h3>
                        </div><!-- end card header -->
                        <div class="card-body form-steps">
                            <form class="vertical-navs-step">
                                <div class="row gy-5">
                                    <div class="col-lg-12">
                                        <div class="mb-4">
                                            <h3>Basic info</h3>
                                        </div>
                                                    
                                        <div>
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <label for="firstName" class="form-label">Package name</label>
                                                    <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Add a service name, e.g. Men's haircut" value="">
                                                </div>

                                                {{-- <div class="col-sm-6">
                                                    <label for="lastName" class="form-label">Service type</label>
                                                    <select name="service_type" id="" class="form-select">
                                                        <option value=""  >Select service type</option>
                                                    </select>
                                                </div> --}}

                                                <div class="col-sm-12">
                                                    <label for="lastName" class="form-label">Menu category</label>
                                                    <select name="menu_category" id="" class="form-select">
                                                        <option value=""  >Select menu category</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <label for="email" class="form-label">Description <span class="text-muted" >(Optional)</span> </label>
                                                    <textarea class="form-control" id="description" rows="6" name="description" placeholder="Add a short description"></textarea>
                                                </div>
                                                <hr>
                                                <div class="col-12 mt-4">
                                                <h3>Services</h3>
                                                    <span class="text-muted" >Select which services to include in this package and how they should be sequenced when booked.</span>
                                                </div>
                                                {{-- <div class="col-6">
                                                    <label for="email" class="form-label">Start Date</label>
                                                    <div class="input-group" style="border-radius: 40px !important;">
                                                        <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="email" class="form-label">End Date</label>
                                                    <div class="input-group" style="border-radius: 40px !important;">
                                                        <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                    </div>   
                                                </div> --}}
                                                <div class="col-md-12">
                                                    <label for="phone" class="form-label">Add Servive</label>
                                                    <select name="" class="form-select" id="">
                                                        <option value="" >Haircut</option>
                                                        <option value="" >Facial</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="phone" class="form-label">Schedule type</label>
                                                    <select name="" class="form-select" id="">
                                                        <option value="" >Booked in sequence</option>
                                                        <option value="" >Booked in parallel</option>
                                                    </select>
                                                </div>
                                               
                                               
                                                <hr>
                                                <h3 class="mt-3">Pricing</h3>
                                                <div class="col-md-6">
                                                    <label for="phone" class="form-label">Price type</label>
                                                    <select name="" class="form-select" id="">
                                                        <option value="" >Service pricing</option>
                                                        <option value="" >Free</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone" class="form-label">Retail Price</label>
                                                    <input type="text" name="retail_price" id="retail_price" class="form-control" readonly placeholder="USD 0.00">
                                                    <span class="text-muted" >No discount applied </span>
                                                </div>
                                                <hr>
                                                <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center">
                                                            <h3 class="mb-0 me-2">Online booking

                                                            </h3>
                                                            <span class="badge bg-success">On</span>
                                                        </div>
                                                        <span class="text-muted mb-0" style="font-size: 14px;">Allow clients to book this package online via the Fresha Marketplace, <br> socials and your own custom booking links.</span>
                                                    </div>
                                                    <div class="form-check form-switch" style="font-size: x-large">
                                                        <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" class="btn btn-success btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Save</button>
                                        </div>
                                                
                                                
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                    </div>
                    <!-- end -->
                </div>
                <!-- end col -->
            </div>
        </div><!-- container-fluid -->
    </div><!-- End Page-content -->
</div><!-- end main content -->

@endsection

@push('scripts')
<script src="{{asset('assets/backend/js/pages/form-wizard.init.js')}}"></script>
    


<script>







    document.querySelectorAll('.user-icon').forEach(icon => {
    const name = icon.nextElementSibling.textContent; // Get the name from the span
    const firstLetter = name.charAt(0).toUpperCase(); // Get the first letter
    icon.querySelector('.placeholder').textContent = firstLetter; // Set it to the placeholder
});






///////////checkbox for address

document.getElementById('selectAll').addEventListener('change', function() {
    const checked = this.checked;
    document.querySelectorAll('.form-check-input[type="checkbox"]').forEach(function(checkbox) {
        checkbox.checked = checked;
    });
});


</script>
@endpush