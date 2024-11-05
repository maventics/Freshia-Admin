@extends('backend.layouts.admin-master')
@section('title','Calender')
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
                                             <p class="waitlist"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWaitlist" aria-controls="offcanvasRight"><i class="ri-calendar-todo-fill" style="font-size: 17px" ></i> <span style="font-size: 16px" >Waitlist</span> </p>
                                             <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWaitlist" aria-labelledby="offcanvasWaitlistLabel">
                                                <div class="offcanvas-header">
                                                    <h5 id="offcanvasWaitlistLabel">Top</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-dark float-end w-100 add-button" style="border-radius: 40px;"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" >Add</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="user-info">
                                        <h3>Users and Their Bookings</h3>
                                        <ul>
                                            @foreach ($users as $user)
                                                <li>{{ $user->fname }}: {{ $user->bookings->count() }} booking(s)</li>
                                            @endforeach
                                        </ul>
                                    </div>
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
                </div>
            </div> <!-- end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>


{{-- <div id="exampleModalgrid" class="modal fade" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalgridLabel">Select Service</h5>
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
                                                    <h5 class="mx-2 fs-14 my-1 text-muted">{{ formatDuration($service->duration) }}</h5>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h4 class="float-end">${{ $service->price }}</h4>
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
            <div class="modal-footer mt-4">
                
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> --}}


<!-- right offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width:40%">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Select Service</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="margin-top:-39px">
        <div class="card-body">
           
            <div>
                <form action="{{route('admin.booking.store')}}" method="POST">
                    @csrf
                    <div class="mt-3">
                        <label for="team_member" class="form-label">Select a team member</label>
                        <select name="booking_team_member" id="" class="form-select" required>
                            <option value="" disabled selected>Select a team memeber</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->fname}} {{$user->lname}}  </option>
                            @endforeach
                        </select>
                    </div>
                    <label for="booking_client" class="form-label mr-3 mt-3">Select a Client</label>
                    <div class="d-flex align-items-center mb-3">
                        
                        <select name="booking_client" id="booking_client" class="form-select" required>
                            <option value="" disabled selected >Select a client</option>
                            @forelse ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->fname }} {{ $client->lname }}</option>
                            @empty
                                <option value="">No client available</option>
                            @endforelse
                        </select>
                    
                        <!-- Add a + button next to the select -->
                        <a href="{{ route('admin.client.create', ['redirect_to' => url()->current()]) }}" class="btn btn-outline-dark ml-2" id="addClientBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="Add a Client">
                            <i class="bi bi-plus"></i> <!-- Bootstrap Icons for the plus sign -->
                        </a>
                    </div>
                    
                    <div class="input-group mt-3">
                        <span class="input-group-text"><i class="ri-search-line"></i></span>
                        <input type="search" class="form-control" name="search" placeholder="Search service name">
                    </div>

                    <div class="table-responsive table-card mt-3 mb-3">
                        <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                            <tbody>
                                @foreach($services as $categoryName => $categoryServices)
                                    <!-- Category Header as a Row -->
                                    <tr>
                                        <td colspan="2">
                                            <h3 class="mx-2 d-flex align-items-center flex-grow-1">
                                                {{ $categoryName }}
                                                <span class="team-members-count">
                                                    {{ $categoryServices->count() }}
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                    
                                    <!-- Services for Each Category -->
                                    @foreach($categoryServices as $service)
                                        <tr id="service-row" class="service-row ml-3 mb-3 mt-3" data-service-id="{{ $service->id }}">
                                            <td class="service-name-cell">
                                                <div class="d-flex align-items-center">
                                                    <div class="service-info">
                                                        <h5 class="mt-2 mx-2">{{ $service->service_name }}</h5>
                                                        <h5 class="mx-2 fs-14 my-1 text-muted">{{ $service->duration }} min</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="float-end">${{ $service->price }}</h5>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    
                    
                
                    <!-- Hidden input to store selected service IDs -->
                    <input type="hidden" name="services[]" id="selected-services" value="">
        
                    
                    <div class="mb-3 mt-3 float-end" style="margin-top: 10px">
                        <button type="button" class="btn btn-light mx-2" data-bs-dismiss="offcanvas" aria-label="Close">Checkout</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div><!-- end card-body -->
        
    </div>
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





document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridDay', // Set the initial view to timeline
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'timeGridWeek,timeGridDay'
            },
            events: [
                // Sample events
                {
                    title: 'Event 1',
                    start: '2024-11-01T10:00:00',
                    end: '2024-11-01T12:00:00'
                },
                {
                    title: 'Event 2',
                    start: '2024-11-01T13:00:00',
                    end: '2024-11-01T14:00:00'
                }
            ],
            // Specify timeline settings
            slotDuration: '00:15:00', // Duration for each slot
            allDaySlot: false, // Disable all-day slot if you only want a timeline
        });

        calendar.render();
});



////////////open offcanvas when admin added client from this page

document.addEventListener('DOMContentLoaded', function () {
        // Check if the client_added session flag exists
    @if(session('client_added'))
        var offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
        offcanvas.show();  // Show the offcanvas
    @endif
});






////////////selects the service 

// document.addEventListener('DOMContentLoaded', function() {
//     const checkboxes = document.querySelectorAll('.service-checkbox');

//     checkboxes.forEach(checkbox => {
//         checkbox.addEventListener('change', function() {
//             const row = this.closest('tr');
//             row.classList.toggle('table-active', this.checked); // Highlight the row
//         });
//     });
// });


// document.addEventListener('DOMContentLoaded', function() {
//     const checkboxes = document.querySelectorAll('.service-checkbox');

//     checkboxes.forEach(checkbox => {
//         checkbox.addEventListener('change', function() {
//             // If the checkbox is checked, uncheck all other checkboxes
//             if (this.checked) {
//                 checkboxes.forEach(checkbox => {
//                     if (checkbox !== this) {
//                         checkbox.checked = false; // Uncheck other checkboxes
//                         const row = checkbox.closest('tr');
//                         row.classList.remove('table-active'); // Remove highlight from other rows
//                     }
//                 });
//             }

//             // Highlight the row of the selected checkbox
//             const row = this.closest('tr');
//             row.classList.toggle('table-active', this.checked);
//         });
//     });
// });

// document.addEventListener('DOMContentLoaded', function() {
//     const checkboxes = document.querySelectorAll('.service-checkbox');

//     checkboxes.forEach(checkbox => {
//         checkbox.addEventListener('change', function() {
//             const row = this.closest('tr');
//             const serviceId = this.value;  // Get the ID of the selected service

//             // If the checkbox is checked, hide all other services and show the "Add Service" button
//             if (this.checked) {
//                 // Hide all other rows except the selected one
//                 document.querySelectorAll('.service-checkbox').forEach(otherCheckbox => {
//                     const otherRow = otherCheckbox.closest('tr');
//                     if (otherCheckbox !== this) {
//                         otherRow.classList.add('d-none');  // Hide other rows
//                     }
//                 });

//                 // Show the Add Service button for the selected service
//                 document.querySelector(`.service-button-${serviceId}`).classList.remove('d-none');
//             } else {
//                 // If unchecked, show all rows and hide the "Add Service" button
//                 document.querySelectorAll('.service-checkbox').forEach(otherCheckbox => {
//                     const otherRow = otherCheckbox.closest('tr');
//                     otherRow.classList.remove('d-none');  // Show all rows
//                 });

//                 // Hide the Add Service button when the checkbox is unchecked
//                 document.querySelector(`.service-button-${serviceId}`).classList.add('d-none');
//             }
//         });
//     });
// });


document.addEventListener('DOMContentLoaded', function() {
    const rows = document.querySelectorAll('.service-row');

    rows.forEach(row => {
        row.addEventListener('click', function() {
            const serviceId = this.getAttribute('data-service-id');
            const selectedServicesInput = document.getElementById('selected-services');

            // Toggle the selection state
            if (this.classList.contains('table-active')) {
                // Unselect
                this.classList.remove('table-active');
                const services = selectedServicesInput.value.split(',');
                const index = services.indexOf(serviceId);
                if (index > -1) {
                    services.splice(index, 1); // Remove from the list
                }
                selectedServicesInput.value = services.join(',');
            } else {
                // Select
                this.classList.add('table-active');
                const services = selectedServicesInput.value ? selectedServicesInput.value.split(',') : [];
                services.push(serviceId); // Add the service ID
                selectedServicesInput.value = services.join(',');
            }
        });
    });
});



</script>
@endpush