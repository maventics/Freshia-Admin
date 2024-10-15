   
@extends('backend.layouts.admin-master')
@section('title','Create Client')
@push('styles')
  <link rel="stylesheet" href="{{asset('assets/backend/libs/filepond/filepond.min.css')}}" type="text/css" />
    <style>
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
                        <h4 class="mb-sm-0">Create Client</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Clients</a></li>
                                <li class="breadcrumb-item active">Create Client</li>
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
                            <h4 class="card-title mb-0">Manage your client’s personal profile</h4>
                        </div><!-- end card header -->
                        <div class="card-body form-steps">
                            <form class="vertical-navs-step">
                                <div class="row gy-5">
                                    <div class="col-lg-4">
                                        <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Step 1
                                                </span>
                                                Profile
                                            </button>
                                            <button class="nav-link" id="v-pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                                                </span>
                                                Addresses
                                            </button>
                                            <button class="nav-link" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Step 3
                                                </span>
                                                Emergency Contacts
                                            </button>
                                            <hr>
                                            <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Step 4
                                                </span>
                                                Setting
                                            </button>
                                        </div>
                                        <!-- end nav -->
                                    </div> <!-- end col-->
                                    <div class="col-lg-8">
                                        <div class="px-lg-4">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                    <div>
                                                        <h5>Profile</h5>
                                                        <p class="text-muted">Manage your client’s personal profile</p>
                                                    </div>
                                                    <div>
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <label for="firstName" class="form-label">First name</label>
                                                                <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" value="">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="lastName" class="form-label">Last name</label>
                                                                <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" value="">
                                                            </div>

                                                            <div class="col-6">
                                                                <label for="username" class="form-label">Email</label>
                                                                <div class="input-group">
                                                                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="country-code" class="form-label"> Code</label>
                                                                <select class="form-select" id="country-code" required>
                                                                    <option value="" disabled selected>+1</option>
                                                                    <option value="+1">United States (+1)</option>
                                                                    <option value="+44">United Kingdom (+44)</option>
                                                                    <option value="+91">India (+91)</option>
                                                                    <option value="+61">Australia (+61)</option>
                                                                    <option value="+81">Japan (+81)</option>
                                                                    <!-- Add more country options as needed -->
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="text" class="form-control" id="phone" placeholder="123-456-7890" required>
                                                            </div>

                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Birth <span class="text-muted">(Optional)</span></label>
                                                                <input type="date" class="form-control" id="email" placeholder="Enter Email">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Year <span class="text-muted">(Optional)</span></label>
                                                                <input type="date" class="form-control" id="email" placeholder="Enter Email">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Addresses</button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade show" id="v-pills-bill-address" role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                                                    <div>
                                                        <h5>Addresses</h5>
                                                        <p class="text-muted">Manage your client’s addresses</p>
                                                    </div>

                                                    <div>
                                                        
                                                              <h5 type="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                                + Add New Address
                                                            </h5>

                                                                <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalgridLabel">New Address</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="d-flex justify-content-between gap-3 align-items-center">
                                                                                    <div class="home-address text-center border rounded py-3 flex-fill" onclick="selectAddressType('Home')">
                                                                                        <span><i class="ri-home-line"></i></span>
                                                                                        <p>Home</p>
                                                                                    </div>
                                                                                    <div class="home-address text-center border rounded py-3 flex-fill" onclick="selectAddressType('Work')">
                                                                                        <span><i class="ri-briefcase-4-fill"></i></span>
                                                                                        <p>Work</p>
                                                                                    </div>
                                                                                    <div class="home-address text-center border rounded py-3 flex-fill" onclick="selectAddressType('Other')">
                                                                                        <span><i class="ri-more-fill"></i></span>
                                                                                        <p>Other</p>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="mt-3">
                                                                                    <label for="selectedAddressTypeModal" class="form-label">Selected Address Type</label>
                                                                                    <input type="text" class="form-control" id="selectedAddressTypeModal" value="Home" readonly>
                                                                                </div>

                                                                                <div class="d-flex justify-content-end mt-3">
                                                                                    <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary" id="submitAddressType">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            {{-- <div class="mt-4" >
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <label for="selectedAddressType" class="form-label">Selected Address Type</label>
                                                                        <input type="text" class="form-control" id="selectedAddressType" placeholder="Selected Address Type" readonly>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="address" class="form-label">Address</label>
                                                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="address2" class="form-label">Apt/Suite<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="district" class="form-label">District<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="district" placeholder="District">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="city" class="form-label">City<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="city" placeholder="City">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="region" class="form-label">Region<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="region" placeholder="Region">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="state" class="form-label">Postcode</label>
                                                                        <select class="form-select" id="state">
                                                                            <option value="">Choose...</option>
                                                                            <option>California</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="country" class="form-label">Country</label>
                                                                        <select class="form-select" id="country">
                                                                            <option value="">Choose...</option>
                                                                            <option>United States</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                            <div class="mt-4 d-none" id="addressFields">
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <label for="selectedAddressType" class="form-label">Selected Address Type</label>
                                                                        <input type="text" class="form-control" id="selectedAddressType" placeholder="Selected Address Type" readonly>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="address" class="form-label">Address</label>
                                                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="address2" class="form-label">Apt/Suite<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="district" class="form-label">District<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="district" placeholder="District">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="city" class="form-label">City<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="city" placeholder="City">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="region" class="form-label">Region<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="region" placeholder="Region">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="state" class="form-label">Postcode</label>
                                                                        <select class="form-select" id="state">
                                                                            <option value="">Choose...</option>
                                                                            <option>California</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="country" class="form-label">Country</label>
                                                                        <select class="form-select" id="country">
                                                                            <option value="">Choose...</option>
                                                                            <option>United States</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to profile</button>
                                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue</button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                                                    <div>
                                                        <h5>Emergency contacts</h5>
                                                        <p class="text-muted">Manage your client’s emergency contacts.</p>
                                                    </div>

                                                    <div>
                                                       

                                                        <div class="row gy-3">
                                                            <h4>Primary contact</h4>
                                                            <div class="col-sm-6">
                                                                <label for="firstName" class="form-label">Full name</label>
                                                                <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" value="">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="lastName" class="form-label">Relationship</label>
                                                                <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" value="">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="cc-number" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="cc-number" placeholder="Enter Email" required>
                                                                
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="country-code" class="form-label"> Code</label>
                                                                <select class="form-select" id="country-code" required>
                                                                    <option value="" disabled selected>+1</option>
                                                                    <option value="+1">United States (+1)</option>
                                                                    <option value="+44">United Kingdom (+44)</option>
                                                                    <option value="+91">India (+91)</option>
                                                                    <option value="+61">Australia (+61)</option>
                                                                    <option value="+81">Japan (+81)</option>
                                                                    <!-- Add more country options as needed -->
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="text" class="form-control" id="phone" placeholder="123-456-7890" required>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        <hr class="mt-4 mb-2">
                                                        <div class="row gy-3">
                                                            <h4>Secondary contact</h4>
                                                            <div class="col-sm-6">
                                                                <label for="firstName" class="form-label">Full name</label>
                                                                <input type="text" class="form-control" id="firstName" placeholder="Enter First Name" value="">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="lastName" class="form-label">Relationship</label>
                                                                <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name" value="">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="cc-number" class="form-label">Email</label>
                                                                <input type="email" class="form-control" id="cc-number" placeholder="Enter Email" required>
                                                                
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="country-code" class="form-label"> Code</label>
                                                                <select class="form-select" id="country-code" required>
                                                                    <option value="" disabled selected>+1</option>
                                                                    <option value="+1">United States (+1)</option>
                                                                    <option value="+44">United Kingdom (+44)</option>
                                                                    <option value="+91">India (+91)</option>
                                                                    <option value="+61">Australia (+61)</option>
                                                                    <option value="+81">Japan (+81)</option>
                                                                    <!-- Add more country options as needed -->
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="text" class="form-control" id="phone" placeholder="123-456-7890" required>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Shipping Info</button>
                                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-finish-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Order Complete</button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                                    {{-- <div class="text-center pt-4 pb-2">
                                                        <div>
                                                            <h5>Notifications</h5>
                                                            <p class="text-muted">Choose how you'd like to keep this client up to date..</p>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input" id="same-address">
                                                            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="save-info">
                                                            <label class="form-check-label" for="save-info">Save this information for next time</label>
                                                        </div>
                                                    </div> --}}

                                                    <div class="row gy-3">
                                                        <div>
                                                            <h5>Notifications</h5>
                                                            <p class="text-muted">Choose how you'd like to keep this client up to date..</p>
                                                        </div>
                                                        

                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input" id="same-address">
                                                            <label class="form-check-label" for="same-address">Send Email Notifications</label>
                                                        </div>
                                                        <hr>
                                                        <div>
                                                            <h5>Marketing notifications</h5>
                                                            <p class="text-muted">Choose if this client has agreed to receive marketing notifications.</p>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="save-info">
                                                            <label class="form-check-label" for="save-info">Client accepts email marketing notifications</label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="save-info">
                                                            <label class="form-check-label" for="save-info">Client accepts text message marketing notifications</label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
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
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
</div>

@endsection


@push('scripts')
<script src="{{asset('assets/backend/js/pages/form-wizard.init.js')}}"></script>
<script src="{{asset('assets/backend/libs/filepond/filepond.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
<script src="{{asset('assets/backend/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>

<script src="{{asset('assets/backend/js/pages/form-file-upload.init.js')}}"></script>


<script>

// let selectedAddressType = 'Home'; // Default selection

// // Function to set the selected address type
// function selectAddressType(addressType) {
//     selectedAddressType = addressType;
    
//     // Update the modal input field to reflect the selection
//     document.getElementById('selectedAddressTypeModal').value = addressType; // Use the modal input ID here
// }

// // Function to open the modal
// function openModal() {
//     // Show the modal and set the default value for the selected address type when it opens
//     const modalElement = document.getElementById('exampleModalgrid');
//     const modalInstance = new bootstrap.Modal(modalElement);
    
//     // Set the modal input to the currently selected address type
//     document.getElementById('selectedAddressTypeModal').value = selectedAddressType; // Ensure this updates the modal input

//     modalInstance.show();
// }

// // Handle submission of the selected address type
// document.getElementById('submitAddressType').addEventListener('click', function () {
//     // Update the main form input field with the selected address type
//     document.getElementById('selectedAddressType').value = selectedAddressType; 

//     // Close the modal programmatically
//     const modalElement = document.getElementById('exampleModalgrid');
//     const modalInstance = bootstrap.Modal.getInstance(modalElement);
//     modalInstance.hide();
// });

// Open the modal when the button is clicked
// document.querySelector('[data-bs-toggle="modal"]').addEventListener('click', openModal);



let selectedAddressType = 'Home'; // Default selection

// Function to set the selected address type
function selectAddressType(addressType) {
    selectedAddressType = addressType;
    document.getElementById('selectedAddressTypeModal').value = addressType; // Update modal input
}

// Function to open the modal
function openModal() {
    // Show the modal and set the default value for the selected address type when it opens
    const modalElement = document.getElementById('exampleModalgrid');
    const modalInstance = new bootstrap.Modal(modalElement);
    document.getElementById('selectedAddressTypeModal').value = selectedAddressType; // Ensure this updates the modal input
    modalInstance.show();
}

// Handle submission of the selected address type
document.getElementById('submitAddressType').addEventListener('click', function () {
    // Update the main form input field with the selected address type
    document.getElementById('selectedAddressType').value = selectedAddressType; 

    // Show the address fields
    document.getElementById('addressFields').classList.remove('d-none');

    // Close the modal programmatically
    const modalElement = document.getElementById('exampleModalgrid');
    const modalInstance = bootstrap.Modal.getInstance(modalElement);
    modalInstance.hide();
});


</script>

@endpush