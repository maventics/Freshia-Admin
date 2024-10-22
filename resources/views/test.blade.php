@extends('backend.layouts.admin-master')
@section('title','Add Service')
@push('styles')
<style>
 
 .upload-container {
    display: flex;
    flex-direction: column;
    position: relative;
}

input[type="file"] {
    display: none; /* Hide the default file input */
}

.upload-icon {
    width: 150px; /* Adjust the size as needed */
    height: 150px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden; /* Ensure the image fits within the circle */
    background-color: #bad5f1;
    cursor: pointer;
    transition: background-color 0.3s;
}


.upload-icon i {
    font-size: 24px; /* Adjust icon size */
    color: #007bff; /* Change icon color */
    position: absolute; /* Position the icon in the center */
}

.uploaded-img {
    width: 100%; /* Make image fit the container */
    height: 100%;
    object-fit: cover; /* Maintain aspect ratio */
    border-radius: 50%; /* Ensure the image is circular */
    display: none; /* Hide by default */
}

.file-name {
    margin-top: 10px;
    color: #555;
}

.remove-file {
    background: transparent; /* Make the background transparent */
    border: none; /* Remove border */
    color: #dc3545; /* Red color for the cross icon */
    cursor: pointer;
    margin-top: 5px;
    font-size: 18px; /* Adjust size as needed */
    display: inline-flex; /* Align icon properly */
    align-items: center; /* Center icon vertically */
}


.home-address {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    background-color: #f9f9f9;
    transition: background-color 0.3s ease;
}

.home-address:hover {
    background-color: #e6e6e6;
}

.home-address span {
    font-size: 24px;
    color: #555;
}

.home-address p {
    margin: 8px 0 0;
    font-weight: bold;
    color: #333;
}
.home-address.selected {
    border-color: #007bff; /* Highlight border */
    background-color: #f0f8ff; /* Light blue background */
}

.home-address {
    border: 2px solid transparent; /* Default border for unselected */
    cursor: pointer;
    transition: border-color 0.3s ease;
}

.home-address.selected {
    border-color: #007bff; /* Highlight the selected option with your preferred color */
    background-color: rgba(0, 123, 255, 0.1); /* Light background color for better visibility */
}

.home-address:hover {
    border-color: #007bff; /* Add a hover effect */
}


.service-item {
    border-radius: 5px; /* Rounded corners for the service item */
}

.service-item:hover {
    background-color: #f8f9fa; /* Light background on hover */
}


.location-icon{
    background: #bad5f1;
    padding: 15px;
    border-radius: 53px;
    margin-right: 10px;
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    }

.location-icon i{
    color:#007bff"

}

.filter-button {
    display: inline-flex; /* Make it a flex container */
    align-items: center; /* Center vertically */
    border: 1px solid; /* Border */
    padding: 7px 15px; /* Padding for a better look */
    border-radius: 50px; /* Fully rounded */
    background: #fff; /* Background color */
    text-decoration: none; /* Remove underline from link */
    color: #000; /* Text color */
    transition: background 0.3s; /* Smooth transition for hover */
}

.filter-button:hover {
    background: #f9f9f9; /* Darker background on hover */
}

</style>
@endpush
@section('content')

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Service</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Catalog</a></li>
                                <li class="breadcrumb-item active">Add Service</li>
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
                            <h2 class="mb-0">New Service
                                <a class="btn btn-danger float-end" href="{{route('admin.catelog.index')}}">Back</a>
                            </h2>
                        </div><!-- end card header -->
                        <div class="card-body form-steps">
                            <form class="vertical-navs-step" method="POST" action="{{route('admin.service.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-5">
                                    <div class="col-lg-4">
                                        <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Basic details
                                            </button>
                                            <button class="nav-link" id="v-pills-team-members-tab" data-bs-toggle="pill" data-bs-target="#v-pills-team-members" type="button" role="tab" aria-controls="v-pills-team-members" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Team members
                                            </button>
                                            <button class="nav-link" id="v-pills-resources-tab" data-bs-toggle="pill" data-bs-target="#v-pills-resources" type="button" role="tab" aria-controls="v-pills-resources" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Resources
                                            </button>
                                            <hr>
                                            <h4>Settings</h4>
                                            <button class="nav-link" id="v-pills-online-booking-tab" data-bs-toggle="pill" data-bs-target="#v-pills-online-booking" type="button" role="tab" aria-controls="v-pills-online-booking" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Online booking
                                            </button>
                                            <button class="nav-link" id="v-pills-forms-tab" data-bs-toggle="pill" data-bs-target="#v-pills-forms" type="button" role="tab" aria-controls="v-pills-forms" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Forms
                                            </button>
                                            <button class="nav-link" id="v-pills-commision-tab" data-bs-toggle="pill" data-bs-target="#v-pills-commision" type="button" role="tab" aria-controls="v-pills-commision" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Commision
                                            </button>
                                            <button class="nav-link" id="v-pills-setting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-setting" type="button" role="tab" aria-controls="v-pills-setting" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Setting
                                            </button>
                                            <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Step 4
                                                </span>
                                                Finish
                                            </button>
                                        </div>
                                        <!-- end nav -->
                                    </div> <!-- end col-->
                                    <div class="col-lg-8">
                                        <div class="px-lg-4">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                    <div class="mb-4">
                                                        <h3>Basic details</h3>
                                                    </div>
                                                    
                                                    <div>
                                                        <div class="row g-3">
                                                            <div class="col-sm-12">
                                                                <label for="service_name" class="form-label">Service name</label>
                                                                <input type="text" name="service_name" class="form-control" placeholder="Add a service name, e.g. Men's haircut">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="service_type" class="form-label">Service Type</label>
                                                                <select name="service_type" class="form-select" style="margin-bottom: 20px;">
                                                                    <option value="">Select service type</option>
                                                                    @forelse ($serviceTypes as $service)
                                                                        <option value="{{ $service->id }}" disabled style="font-weight: bold; font-size: 17px;">{{ $service->service_type }}</option>
                                                                        @foreach ($service->subServiceTypes as $subService)
                                                                            <option value="{{ $subService->id }}" style="font-size: 15px;" >{{ $subService->sub_service }}</option>
                                                                        @endforeach
                                                                    @empty
                                                                        <option value="">No service types available</option>
                                                                    @endforelse
                                                                </select>
                                                            </div>
                                                            
                                                            

                                                            <div class="col-sm-6">
                                                                <label for="lastName" class="form-label">Menu category</label>
                                                                <select name="menu_category"  class="form-select">
                                                                    <option value=""  >Select menu category</option>
                                                                    @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}" style="font-size: 15px;"  >{{ $category->category }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="col-12">
                                                                <label for="email" class="form-label">Description <span class="text-muted" >(Optional)</span> </label>
                                                                <textarea class="form-control" id="description" rows="6" name="description" placeholder="Add a short description"></textarea>
                                                            </div>
                                                            <div class="col-12 mt-4">
                                                            <h3>Pricing and duration</h3>

                                                            </div>
                                                          
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Duration</label>
                                                                <select name="duration_hr" class="form-select" id="">
                                                                    <option value=""  >Duration hours</option>
                                                                    @forelse ($durationHours as $durationHour)
                                                                        <option value="{{ $durationHour->duration_hr }}" style="font-size: 15px;" >{{ $durationHour->duration_hr }}</option>
                                                                @empty
                                                                    <option value="">No duration hours available</option>
                                                                @endforelse
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Price type</label>
                                                                <select name="price_type" class="form-select" id="">
                                                                    <option value="fixed" >Fixed</option>
                                                                    <option value="free" >Free</option>
                                                                    <option value="from" >From</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="price" class="form-label">Price</label>
                                                                <input type="text" class="form-control" name="price" placeholder="USD 0.00">
                                                            </div>
                                                            <hr>
                                                            

                                                        <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <h3 class="mb-0 me-2">Extra Time</h3>
                                                                    <span class="badge bg-dark" id="extraTimeBadge">Off</span>
                                                                </div>
                                                                <p class="text-muted mb-0" style="font-size: 14px;">Automatically add blocked time or processing time after each appointment</p>
                                                            </div>
                                                            <div class="form-check form-switch" style="font-size: x-large">
                                                                <input type="checkbox" name="extra_time" class="form-check-input" id="customSwitchsizelg">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="extra-time-fields" style="display: none;">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="price" class="form-label">Type</label>
                                                                    <select name="extra_time_type" class="form-select" id="">
                                                                        <option value="Processing time after" style="font-size: 15px;" >Processing time after</option>
                                                                        <option value="Processing time before" style="font-size: 15px;" >Processing time before</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="duration" class="form-label">Duration</label>
                                                                    <select name="extra_time_duration" class="form-select" id="">
                                                                        <option value=""  >Duration hours</option>
                                                                        @forelse ($durationHours as $durationHour)
                                                                            <option value="{{ $durationHour->duration_hr }}" style="font-size: 15px;" >{{ $durationHour->duration_hr }}</option>
                                                                        @empty
                                                                        <option value="">No duration hours available</option>
                                                                        @endforelse
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-team-members-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Team Member</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-team-members-tab')">
                                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                    </button>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-pane fade" id="v-pills-setting" role="tabpanel" aria-labelledby="v-pills-setting-tab">
                                                    <div class="row gy-3">
                                                        <h3>Settings</h3>
                                                       
                                                        <div class="col-md-12">
                                                            <div class="form-check d-flex align-items-center p-4">
                                                                <input class="form-check-input" type="checkbox" id="selectAll" style="transform: scale(1.8);">
                                                                <label class="form-check-label" for="selectAll" style="margin-left: 10px;"> Require patch test <br>
                                                                <span class="text-muted font-size:10px" >Show a patch test requirement when creating appointments with this service. </span>
                                                                    
                                                                </label> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-commision-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Commision</button>
                                                        <button type="submit" class="btn btn-success btn-label right ms-auto"> Finish</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-finish-tab')">
                                                            <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Finish
                                                    </button> --}}
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                                    <div class="text-center pt-4 pb-2">

                                                        <div class="mb-4">
                                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                        </div>
                                                        <h5>Service Added Successfully !</h5>
                                                        {{-- <p class="text-muted">You Will receive an order confirmation email with details of your order.</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab content -->
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



///////////////////// nexttab tabs code 


function changeTab(tabId) {
        var tabTrigger = new bootstrap.Tab(document.getElementById(tabId));
        tabTrigger.show();
    }


   /////////////// extra time off filds code in basic info
$(document).ready(function() {
    // Hide fields by default
    $('.extra-time-fields').hide();

    // Toggle visibility when checkbox state changes
    $('#customSwitchsizelg').change(function() {
        if ($(this).is(':checked')) {
                $('.extra-time-fields').slideDown(); // Show the fields with animation
                $('#extraTimeBadge').text('On').removeClass('bg-dark').addClass('bg-success'); // Change badge to On and bg-success
            } else {
                $('.extra-time-fields').slideUp(); // Hide the fields with animation
                $('#extraTimeBadge').text('Off').removeClass('bg-success').addClass('bg-dark'); // Change badge back to Off and bg-dark
            }
    });
});


document.querySelector('form').addEventListener('submit', function (e) {
    console.log({
        service_name: document.querySelector('input[name="service_name"]').value,
        menu_category: document.querySelector('select[name="menu_category"]').value
    });
});

</script>
@endpush