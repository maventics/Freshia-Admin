@extends('backend.layouts.admin-master')
@section('title','Calender')
@push('scripts')
    <style>
        .form-select{
            border-radius: 40px !important;
        }
        .waitlist{
            border: 1px solid #cccccc;
            border-radius: 40px;
            padding: 4px;
            text-align: center;


        }
        .waitlist:hover{
            background: #f9f8f8ec
        }
                                
        .service-item {
        background-color: #f8f9fa; /* Light background */
        border: 1px solid #dee2e6; /* Border color */
        border-radius: 5px;
        padding: 15px;
        position: relative;
        transition: background-color 0.3s;
        }

        .service-item:hover {
        background-color: #e2e6ea; /* Darker background on hover */
        cursor: pointer; /* Change cursor to pointer */
        }

        .service-item h4 {
        margin: 0;
        }

        .service-item .float-end {
        position: absolute;
        right: 15px;
        top: 15px;
        font-weight: bold;
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
                        <h4 class="mb-sm-0">Calendar</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Calendar</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card card-h-100">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <select name="" class="form-select" id="">
                                                <option value="">Brand</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="" class="form-select" id="">
                                                <option value="">Working</option>
                                                <option value="">All</option>
                                                <option value="">John doe</option>
                                                <option value="">James will</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <div class="input-group" style="border-radius: 40px !important">
                                                    <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                    <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                    <p class="waitlist"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="ri-calendar-todo-fill" style="font-size: 17px" ></i> <span style="font-size: 16px" >Waitlist</span> </p>
                                             <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h5 id="offcanvasRightLabel">Offcanvas Right</h5>
                                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                ...
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-dark float-end w-100 add-button" style="border-radius: 40px;" >Add</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-12 d-none">
                            <div class="card card-h-100">
                                <div class="card-body">
                                    <button class="btn btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus"></i> Create New Event</button>

                                    <div id="external-events">
                                        <br>
                                        <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                        <div class="external-event fc-event bg-soft-success text-success" data-class="bg-soft-success">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event Planning
                                        </div>
                                        <div class="external-event fc-event bg-soft-info text-info" data-class="bg-soft-info">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                        </div>
                                        <div class="external-event fc-event bg-soft-warning text-warning" data-class="bg-soft-warning">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating Reports
                                        </div>
                                        <div class="external-event fc-event bg-soft-danger text-danger" data-class="bg-soft-danger">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create New theme
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Upcoming Events</h5>
                                <p class="text-muted">Don't miss scheduled events</p>
                                <div class="pe-2 me-n1 mb-3" data-simplebar style="height: 400px">
                                    <div id="upcoming-event-list"></div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body bg-soft-info">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i data-feather="calendar" class="text-info icon-dual-info"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="fs-15">Welcome to your Calendar!</h6>
                                            <p class="text-muted mb-0">Event that applications book will appear here. Click on an event to see the details and manage applicants event.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div> <!-- end col-->
                    </div>
                    <!--end row-->

                    <div style='clear:both'></div>

                    <!-- Add New Event MODAL -->
                    <div class="modal fade" id="event-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 bg-soft-info">
                                    <h5 class="modal-title" id="modal-title">Add Appiontment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                        <div class="text-end">
                                            <a href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn" data-id="edit-event" onclick="editEvent(this)" role="button">Edit</a>
                                        </div>
                                        <div class="event-details">
                                            <div class="d-flex mb-2">
                                                <div class="flex-grow-1 d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <i class="ri-calendar-event-line text-muted fs-16"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-time-line text-muted fs-16"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> - <span id="event-timepicker2-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-map-pin-line text-muted fs-16"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-discuss-line text-muted fs-16"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row event-form">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Type</label>
                                                    <select class="form-select d-none" name="category" id="event-category" required>
                                                        <option value="bg-soft-danger">Danger</option>
                                                        <option value="bg-soft-success">Success</option>
                                                        <option value="bg-soft-primary">Primary</option>
                                                        <option value="bg-soft-info">Info</option>
                                                        <option value="bg-soft-dark">Dark</option>
                                                        <option value="bg-soft-warning">Warning</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid event category</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Event Name</label>
                                                    <input class="form-control d-none" placeholder="Enter event name" type="text" name="title" id="event-title" required value="" />
                                                    <div class="invalid-feedback">Please provide a valid event name</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label>Event Date</label>
                                                    <div class="input-group d-none">
                                                        <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12" id="event-time">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker1" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select start time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">End Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker2" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select end time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="event-location">Location</label>
                                                    <div>
                                                        <input type="text" class="form-control d-none" name="event-location" id="event-location" placeholder="Event location">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <input type="hidden" id="eventid" name="eventid" value="" />
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control d-none" id="event-description" placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-soft-danger" id="btn-delete-event"><i class="ri-close-line align-bottom"></i> Delete</button>
                                            <button type="submit" class="btn btn-success" id="btn-save-event">Add Appiontment</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
                    </div> <!-- end modal-->

                    {{-- /////////appiontmetn modal --}}
                    <!-- Grids in modals -->

                    {{-- <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalgridLabel">Select Service</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="javascript:void(0);">
                                        <div class="row g-3">
                                            <div>
                                                <h4>Hair and Styling <span>2</span></h4>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="service-item">
                                                    <h4>Haircut</h4>
                                                    <span class="text-muted">1 Hour</span>
                                                    <h3 class="float-end">PKR 12</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="service-item">
                                                    <h4>Facial</h4>
                                                    <span class="text-muted">1 Hour</span>
                                                    <h3 class="float-end">PKR 12</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalgridLabel">Select Service</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="serviceSelection">
                                    <form action="javascript:void(0);">
                                        <div class="row g-3">
                                            <div>
                                                <h4>Hair and Styling <span>2</span></h4>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="service-item" data-service="Haircut" data-duration="1 Hour" data-price="PKR 12">
                                                    <h4>Haircut</h4>
                                                    <span class="text-muted">1 Hour</span>
                                                    <h3 class="float-end">PKR 12</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="service-item" data-service="Facial" data-duration="1 Hour" data-price="PKR 12">
                                                    <h4>Facial</h4>
                                                    <span class="text-muted">1 Hour</span>
                                                    <h3 class="float-end">PKR 12</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-body d-none" id="serviceDetails">
                                    <h4 id="serviceName"></h4>
                                    <span id="serviceDuration" class="text-muted"></span>
                                    <h3 id="servicePrice" class="float-end"></h3>
                                    <p id="serviceDescription"></p>
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" id="backToSelection">Back</button>
                                        <button type="button" class="btn btn-primary" id="confirmSelection">Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalgridLabel">Select Service</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="serviceSelection">
                                    <form action="javascript:void(0);">
                                        <div class="row g-3">
                                            <div>
                                                <h4>Hair and Styling <span style="font-size:12px; padding:2px;border-radius-40px" >2</span></h4>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="service-item" data-service="Haircut" data-duration="1 Hour" data-price="12">
                                                    <h4>Haircut</h4>
                                                    <span class="text-muted">1 Hour</span>
                                                    <h3 class="float-end">PKR 12</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="service-item" data-service="Facial" data-duration="1 Hour" data-price="12">
                                                    <h4>Facial</h4>
                                                    <span class="text-muted">1 Hour</span>
                                                    <h3 class="float-end">PKR 12</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-body d-none" id="serviceDetails">
                                    <h4 id="serviceName" class="fw-bold"></h4>
                                    <span id="serviceDuration" class="text-muted"></span>
                                    <h3 id="servicePrice" class="float-end fw-bold"></h3>
                                    <p id="serviceDescription" class="mt-2">Service description goes here.</p>
                                    <hr>
                                    
                                    <h5>Total: <span id="totalPrice" class="text-success fw-bold float-end">PKR 0</span></h5>
                                    <hr>

                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" id="backToSelection">Back</button>
                                        <button type="button" class="btn btn-primary" id="confirmSelection">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    


                    <!-- end modal-->
                </div>
            </div> <!-- end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>
@endsection

@push('scripts')
    <script>
        var btn = document.getElementsByClassName('add-button')[0]; // Access the first element with the class 'add-button'
        btn.addEventListener('click', function() {
            var modalElement = new bootstrap.Modal(document.getElementById('exampleModalgrid'));
            modalElement.show();
        });
        
    </script>
<script>

// $(document).ready(function() {
//     // Handle service selection
//     $('.service-item').on('click', function() {
//         const serviceName = $(this).data('service');
//         const serviceDuration = $(this).data('duration');
//         const servicePrice = $(this).data('price');

//         // Fill in the details
//         $('#serviceName').text(serviceName);
//         $('#serviceDuration').text(serviceDuration);
//         $('#servicePrice').text(servicePrice);

//         // Switch to details view
//         $('#serviceSelection').addClass('d-none');
//         $('#serviceDetails').removeClass('d-none');
//     });

//     // Back button functionality
//     $('#backToSelection').on('click', function() {
//         $('#serviceDetails').addClass('d-none');
//         $('#serviceSelection').removeClass('d-none');
//     });

//     // Confirm selection functionality
//     $('#confirmSelection').on('click', function() {
//         alert('Service confirmed: ' + $('#serviceName').text());
//         // You can add further logic here to handle the confirmation.
//     });
// });


$(document).ready(function() {
    // Handle service selection
    $('.service-item').on('click', function() {
        const serviceName = $(this).data('service');
        const serviceDuration = $(this).data('duration');
        const servicePrice = $(this).data('price');

        // Fill in the details
        $('#serviceName').text(serviceName);
        $('#serviceDuration').text(serviceDuration);
        $('#servicePrice').text('PKR ' + servicePrice);
        $('#totalPrice').text('PKR ' + servicePrice); // Set total price

        // Switch to details view
        $('#serviceSelection').addClass('d-none');
        $('#serviceDetails').removeClass('d-none');
    });

    // Back button functionality
    $('#backToSelection').on('click', function() {
        $('#serviceDetails').addClass('d-none');
        $('#serviceSelection').removeClass('d-none');
    });

    // Confirm selection functionality
    $('#confirmSelection').on('click', function() {
        alert('Service confirmed: ' + $('#serviceName').text() + ' for ' + $('#totalPrice').text());
        // Add further logic here to handle the confirmation.
    });
});

</script>
@endpush