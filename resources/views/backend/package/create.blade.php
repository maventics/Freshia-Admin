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
                        <div class="card-body">
                            <form class="vertical-navs-step">
                                <div class="row gy-5">
                                    <div class="col-lg-7 mx-auto">
                                        <div class="mb-4">
                                            <h3>Basic info</h3>
                                        </div>
                                        <div>
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <label for="firstName" class="form-label">Package name</label>
                                                    <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Add a service name, e.g. Men's haircut" value="">
                                                </div>

                                                <div class="col-sm-12">
                                                    <label for="lastName" class="form-label">Menu category</label>
                                                    <select name="menu_category" id="" class="form-select">
                                                        <option value="" disabled selected>Select menu category</option>
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" style="font-size: 15px;">{{ $category->category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <label for="email" class="form-label">Description <span class="text-muted" >(Optional)</span> </label>
                                                    <textarea class="form-control" id="description" rows="6" name="description" placeholder="Add a short description"></textarea>
                                                </div>
                                                <p></p>
                                                <hr>
                                                <div class="col-12 mt-4">
                                                <h3>Services</h3>
                                                    <span class="text-muted" >Select which services to include in this package and how they should be sequenced when booked.</span>
                                                </div>
                                                
                                                <div id="selectedServiceInfo" class="col-12 p-3 d-flex justify-content-between align-items-end mt-3">
                                                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                        <tbody id="serviceList"></tbody> <!-- Updated to be a tbody for the table -->
                                                    </table>
                                                </div>

                                                <div class="col-12 p-3 d-flex justify-content-between align-items-end">
                                                    <button type="button" class="add-rsc-btn" data-bs-toggle="modal" data-bs-target="#myModal">+ Add Service</button>
                                                    <h5 class="mb-2" id="totalPriceDuration">1hr USD 0.00</h5>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <label for="phone" class="form-label">Schedule type</label>
                                                    <select name="schedule_type" class="form-select" id="">
                                                        <option value="booked_in_sequence" >Booked in sequence</option>
                                                        <option value="booked_in_parallel" >Booked in parallel</option>
                                                    </select>
                                                </div>
                                                <p></p>
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
                                                    <input type="text" name="retail_price" id="retail_price" class="form-control" placeholder="USD 0.00">
                                                    <span class="text-muted" >No discount applied </span>
                                                </div>
                                                <hr>
                                                {{-- <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center">
                                                            <h3 class="mb-0 me-2">Online booking
                                                            </h3>
                                                            <span class="badge bg-success">On</span>
                                                        </div>
                                                        <span class="text-muted mb-0" style="font-size: 14px;">Allow clients to book this package online via the Fresha Marketplace, socials and your own custom booking links.</span>
                                                    </div>
                                                    <div class="form-check form-switch" style="font-size: x-large">
                                                        <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-12">
                                                    <select name="available_for" id="" class="form-select">
                                                        <option value="all_genders">All Genders</option>
                                                        <option value="male_only">Male only</option>
                                                        <option value="female_only">Female only</option>
                                                    </select>
                                                </div> --}}

                                                <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex align-items-center">
                                                            <h3 class="mb-0 me-2">Online booking</h3>
                                                            <span id="statusBadge" class="badge bg-success">On</span>
                                                        </div>
                                                        <span class="text-muted mb-0" style="font-size: 14px;">
                                                            Allow clients to book this package online via the Fresha Marketplace, socials and your own custom booking links.
                                                        </span>
                                                    </div>
                                                    <div class="form-check form-switch" style="font-size: x-large">
                                                        <input type="checkbox" class="form-check-input" id="customSwitchsizelg" checked>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" id="genderSelectContainer">
                                                    <select name="available_for" class="form-select">
                                                        <option value="all_genders">All Genders</option>
                                                        <option value="male_only">Male only</option>
                                                        <option value="female_only">Female only</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" class="btn btn-success right ms-auto"></i>Save</button>
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



{{-- ///////////////add service modal  --}}


<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="">
                        <div class="input-group">
                            <span class="input-group-text"><i class="ri-search-line"></i></span>
                            <input type="search" class="form-control" name="search" placeholder="Search service name">
                        </div>
                    </form>
                    <div class="table-responsive table-card mt-3">
                        <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                            <tbody>
                                @forelse ($services as $service)
                                    <tr onclick="selectService('{{ $service->service_name }}', '{{ $service->duration }}', '{{ $service->price }}', '{{ $service->id }}')" id="service-row-{{ $service->id }}">

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <h5 class="mt-2 mx-2">{{ $service->service_name }}</h5>
                                                    <h5 class="mx-2 fs-14 my-1 text-muted">{{ $service->duration }}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h4 class="float-end">${{ $service->price }}</h4>
                                        </td>
                                        <td>
                                            <div class="dropdown float-end">
                                                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td>No Service available</td>
                                        </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div><!-- end card-body -->
            </div>
            {{-- <div class="modal-footer mt-4">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary ">Save Changes</button>
            </div> --}}

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->









@endsection
@push('scripts')

<script>

var packageId = "{{$packageId}}";

// function selectService(serviceName, serviceDuration, servicePrice , serviceId) {
//     // Create a new entry for the selected service
//     const serviceList = document.getElementById('serviceList');
//     const newServiceEntry = document.createElement('tr');
    
//     newServiceEntry.innerHTML = `
//         <td>
//             <div class="d-flex align-items-center">
//                 <div>
//                     <h5 class="mt-2 mx-2">${serviceName}</h5>
//                     <h5 class="mx-2 fs-14 my-1 text-muted">${serviceDuration}</h5>
//                 </div>
//             </div>
//         </td>
//         <td>
       
//             <div class="dropdown float-end">
//                 <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="display:flex;margin-top:-4px">
//                     <i class="ri-more-2-fill"></i>
//                 </button>
//                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
//                     <li><a class="dropdown-item text-danger"  href="#">Remove</a></li>
//                 </ul>
//             </div>
//             <h4 class="float-end">${servicePrice}</h4>

//         </td>
//     `;

//     // Append the new entry to the service list
//     serviceList.appendChild(newServiceEntry);


//     $.ajax({
//         url: '/store/service-package', // Change this to your actual endpoint
//         method: 'POST',
//         data: {
//             service_name: serviceName,
//             duration: serviceDuration,
//             price: servicePrice,
//             service_id: serviceId,
//             package_id: packageId,
//             _token: '{{ csrf_token() }}' // Include CSRF token for security
//         },
//         success: function(response) {
//             console.log('Service saved successfully:', response);
//         },
//         error: function(xhr) {
//             console.error('Error saving service:', xhr.responseText);
//         }
//     });
//     // Close the modal
//     $('#myModal').modal('hide');
// }


// function updateTotalPrice(servicePrice) {
//     const totalPriceElement = document.getElementById('totalPrice');
//     // Here you could also keep track of the total service price for multiple selections
//     // For now, just display the price of the latest service selected
//     totalPriceElement.textContent = `USD ${parseFloat(servicePrice).toFixed(2)}`;
// }

// let totalPrice = 0;
// let totalDuration = 0; // In minutes for easier calculations
// let services = []; // Store selected services

// function selectService(serviceName, serviceDuration, servicePrice, serviceId) {
//     // Convert duration from string to minutes
//     const durationInMinutes = parseDuration(serviceDuration);
//     totalPrice += parseFloat(servicePrice);
//     totalDuration += durationInMinutes;

//     // Create a new entry for the selected service
//     const serviceList = document.getElementById('serviceList');
//     const newServiceEntry = document.createElement('tr');
    
//     newServiceEntry.innerHTML = `
//         <td>
//             <div class="d-flex align-items-center">
//                 <div>
//                     <h5 class="mt-2 mx-2">${serviceName}</h5>
//                     <h5 class="mx-2 fs-14 my-1 text-muted">${serviceDuration}</h5>
//                 </div>
//             </div>
//         </td>
//         <td>
//             <div class="dropdown float-end">
//                 <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="display:flex;margin-top:-4px">
//                     <i class="ri-more-2-fill"></i>
//                 </button>
//                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
//                     <li><a class="dropdown-item text-danger" href="#" onclick="removeService('${serviceId}', ${durationInMinutes}, ${servicePrice})">Remove</a></li>
//                 </ul>
//             </div>
//             <h4 class="float-end">${servicePrice}</h4>
//         </td>
//     `;

//     // Append the new entry to the service list
//     serviceList.appendChild(newServiceEntry);

//     // Update the total display
//     updateTotalDisplay();

//     $.ajax({
//         url: '/store/service-package', // Change this to your actual endpoint
//         method: 'POST',
//         data: {
//             service_name: serviceName,
//             duration: serviceDuration,
//             price: servicePrice,
//             service_id: serviceId,
//             package_id: packageId,
//             _token: '{{ csrf_token() }}' // Include CSRF token for security
//         },
//         success: function(response) {
//             console.log('Service saved successfully:', response);
//         },
//         error: function(xhr) {
//             console.error('Error saving service:', xhr.responseText);
//         }
//     });
//     // Close the modal
//     $('#myModal').modal('hide');
// }

// function updateTotalDisplay() {
//     const durationFormatted = formatDuration(totalDuration);
//     document.getElementById('totalPriceDuration').innerText = `${durationFormatted} USD ${totalPrice.toFixed(2)}`;
// }

// function removeService(serviceId, duration, price) {
//     totalPrice -= parseFloat(price);
//     totalDuration -= duration;
//     // Optionally remove the entry from the service list as well
//     const serviceList = document.getElementById('serviceList');
//     const row = document.getElementById(`service-row-${serviceId}`);
//     if (row) {
//         serviceList.removeChild(row);
//     }

//     updateTotalDisplay();
// }

// function parseDuration(durationString) {
//     // Assuming duration is in the format "Xhr" (e.g., "1hr", "2hrs")
//     const match = durationString.match(/(\d+)(hr|hrs)/);
//     return match ? parseInt(match[1]) * 60 : 0; // Convert to minutes
// }

// function formatDuration(duration) {
//     const hours = Math.floor(duration / 60);
//     const minutes = duration % 60;
//     return `${hours}hr ${minutes}min`;
// }

// // Listen for changes to the schedule type
// document.querySelector('select[name="schedule_type"]').addEventListener('change', function() {
//     const selectedValue = this.value;
//     if (selectedValue === 'booked_in_parallel') {
//         // Update duration if needed based on selected services
//         const maxDuration = Math.max(...services.map(service => parseDuration(service.duration)));
//         totalDuration = maxDuration; // Update totalDuration accordingly
//     }
//     updateTotalDisplay();
// });



let totalPrice = 0;
let totalDuration = 0; // Store total duration in minutes
let services = []; // Array to keep track of selected services

function selectService(serviceName, serviceDuration, servicePrice, serviceId) {
    // Convert serviceDuration to minutes if it's in "Xhr" format
    const durationInMinutes = parseDuration(serviceDuration);
    totalPrice += parseFloat(servicePrice);
    totalDuration += durationInMinutes;

    // Create a new entry for the selected service
    const serviceList = document.getElementById('serviceList');
    const newServiceEntry = document.createElement('tr');
    
    newServiceEntry.innerHTML = `
        <td>
            <div class="d-flex align-items-center">
                <div>
                    <h5 class="mt-2 mx-2">${serviceName}</h5>
                    <h5 class="mx-2 fs-14 my-1 text-muted">${serviceDuration}</h5>
                </div>
            </div>
        </td>
        <td>
            <div class="dropdown float-end">
                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="display:flex;margin-top:-4px">
                    <i class="ri-more-2-fill"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item text-danger" href="#" onclick="removeService('${serviceId}', ${durationInMinutes}, ${servicePrice})">Remove</a></li>
                </ul>
            </div>
            <h4 class="float-end">${servicePrice}</h4>
        </td>
    `;

    // Append the new entry to the service list
    serviceList.appendChild(newServiceEntry);
    
    // Update the total display
    updateTotalDisplay();

    $.ajax({
        url: '/store/service-package', // Change this to your actual endpoint
        method: 'POST',
        data: {
            service_name: serviceName,
            duration: serviceDuration,
            price: servicePrice,
            service_id: serviceId,
            package_id: packageId,
            _token: '{{ csrf_token() }}' // Include CSRF token for security
        },
        success: function(response) {
            console.log('Service saved successfully:', response);
        },
        error: function(xhr) {
            console.error('Error saving service:', xhr.responseText);
        }
    });

    // Close the modal
    $('#myModal').modal('hide');
}

function updateTotalDisplay() {
    const durationFormatted = formatDuration(totalDuration);
    document.getElementById('totalPriceDuration').innerText = `${durationFormatted} USD ${totalPrice.toFixed(2)}`;
}

function removeService(serviceId, duration, price) {
    totalPrice -= parseFloat(price);
    totalDuration -= duration;

    // Remove the entry from the service list as well
    const serviceList = document.getElementById('serviceList');
    const row = document.getElementById(`service-row-${serviceId}`);
    if (row) {
        serviceList.removeChild(row);
    }

    updateTotalDisplay();
}

// Function to convert duration from "Xhr" format to minutes
function parseDuration(durationString) {
    const match = durationString.match(/(\d+)(hr|hrs)/);
    return match ? parseInt(match[1]) * 60 : 0; // Convert to minutes
}

// Function to format total duration back to "Xhr" format
function formatDuration(duration) {
    const hours = Math.floor(duration / 60);
    const minutes = duration % 60;
    return `${hours}hr ${minutes}min`;
}

// Listen for changes to the schedule type
document.querySelector('select[name="schedule_type"]').addEventListener('change', function() {
    const selectedValue = this.value;
    if (selectedValue === 'booked_in_parallel') {
        // Update duration if needed based on selected services
        const maxDuration = Math.max(...services.map(service => parseDuration(service.duration)));
        totalDuration = maxDuration; // Update totalDuration accordingly
    }
    updateTotalDisplay();
});



////////////////////////// online booking gender show and hode code

document.addEventListener('DOMContentLoaded', function () {
    const switchInput = document.getElementById('customSwitchsizelg');
    const statusBadge = document.getElementById('statusBadge');
    const genderSelectContainer = document.getElementById('genderSelectContainer');

    // Function to toggle visibility and badge color
    function toggleSelectBox() {
        if (switchInput.checked) {
            genderSelectContainer.style.display = 'block'; // Show select box
            statusBadge.classList.remove('bg-dark'); // Remove dark badge class
            statusBadge.classList.add('bg-success'); // Add success badge class
            statusBadge.innerText = 'On'; // Set badge text
        } else {
            genderSelectContainer.style.display = 'none'; // Hide select box
            statusBadge.classList.remove('bg-success'); // Remove success badge class
            statusBadge.classList.add('bg-dark'); // Add dark badge class
            statusBadge.innerText = 'Off'; // Set badge text
        }
    }

    // Initial call to set the state based on the checkbox
    toggleSelectBox();

    // Event listener for the switch
    switchInput.addEventListener('change', toggleSelectBox);
});



</script>
@endpush