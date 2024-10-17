@extends('backend.layouts.admin-master')
@section('title','Teams')
@push('styles')
<style>


.nav-pills {
    --vz-nav-pills-border-radius: var(--vz-border-radius);
    --vz-nav-pills-link-active-color: #302d2d;
    --vz-nav-pills-link-active-bg: #cad3f0;
}

.team-members-count {
    font-size: 14px;
    border: 1px solid #d5d7da;
    background: #fff;
    width: 30px; /* Set a fixed width */
    height: 30px; /* Set a fixed height equal to width */
    padding: 5px; /* Adjust padding for centering the number */
    border-radius: 50%; /* Make it fully round */
    display: flex; /* Use flexbox for centering */
    align-items: center; /* Vertically center */
    justify-content: center; /* Horizontally center */
    margin-left: 10px
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

.user-icon {
    display: flex;
    align-items: center;
}

.placeholder {
    width: 40px;
    height: 40px;
    background-color: #007bff; /* Adjust as needed */
    color: white;
    display: none; /* Initially hidden */
    align-items: center;
    justify-content: center;
    font-weight: bold;
    border-radius: 50%; /* Ensures it stays round */
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
                                <h4 class="mb-sm-0">Teams</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Teams</a></li>
                                        <li class="breadcrumb-item active">Index</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
        
                    <div class="row">
                        <div class="col-xxl-6 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link mb-2 active" id="v-pills-team-members-tab" data-bs-toggle="pill" href="#v-pills-team-members" role="tab" aria-controls="v-pills-team-members" aria-selected="true">Team Members</a>
                                                <a class="nav-link mb-2" id="v-pills-schedule-shifts-tab" data-bs-toggle="pill" href="#v-pills-schedule-shifts" role="tab" aria-controls="v-pills-schedule-shifts" aria-selected="false">Schedule Shifts</a>
                                                
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-md-10">
                                            <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-team-members" role="tabpanel" aria-labelledby="v-pills-team-members-tab">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="card">
                                                                <div class="card-header align-items-center d-flex">
                                                                    <h3 class="mb-0 d-flex align-items-center flex-grow-1">
                                                                        Team members 
                                                                        <span class="team-members-count">2</span>
                                                                    </h3>
                                                                    
                                                                    <div class="flex-shrink-0">
                                                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                                                            <select name="" id="" class="form-select">
                                                                                <option value=""><strong>Options</strong></option>
                                                                                <option value="">PDF</option>
                                                                                <option value="">CSV</option>
                                                                                <option value="">Excel</option>
                                                                            </select>
                                                                        </div>
                                                                        <a href="{{route('admin.team.create')}}" class="btn btn-dark">Add</a>
                                                                    </div>
                                                                </div><!-- end card header -->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <form action="">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"><i class="ri-search-line"></i></span>
                                                                                    <input type="search" class="form-control" name="search" placeholder="Search Team Member">
                                                                                </div>
                                                                                
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="filters">
                                                                                <a href="" class="filter-button">Filters<i class="ri-sound-module-line" style="margin-left: 5px;" ></i></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="filters float-end">
                                                                                <a href="" class="filter-button"> Custome Order  <i class="ri-menu-add-line" style="margin-left: 5px;"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                </div><!-- end card-body -->
                                                            </div><!-- end card -->
                                                            
                                                    
                                                            <div class="row">
                                                                <!-- Transaction Summary Card -->
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h4>Team members
                                                                            </h4>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Name</th>
                                                                                        <th>Contact</th>
                                                                                        <th>Rating</th>
                                                                                        <th>Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="user-icon" style="display: flex; align-items: center;">
                                                                                                <!-- User Image -->
                                                                                                <img src="path/to/image.jpg" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                                                                                <!-- Placeholder for Initial -->
                                                                                                <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                                                                    J
                                                                                                </div>
                                                                                            </div>
                                                                                            <span>John Doe</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>Email: johndoe@example.com</div>
                                                                                            <div>Phone: +1234567890</div>
                                                                                        </td>
                                                                                        <td>No Rating</td>
                                                                                        <td>
                                                                                            <div class="dropdown">
                                                                                                <button class="btn btn-dark dropdown-toggle" type="button" id="actionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                    Actions
                                                                                                </button>
                                                                                                <ul class="dropdown-menu" aria-labelledby="actionsDropdown">
                                                                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="user-icon" style="display: flex; align-items: center;">
                                                                                                <!-- User Image -->
                                                                                                <img src="path/to/image.jpg" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                                                                                <!-- Placeholder for Initial -->
                                                                                                <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                                                                    J
                                                                                                </div>
                                                                                            </div>
                                                                                            <span>Will Jack </span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>Email: willjack@example.com</div>
                                                                                            <div>Phone: +1234567890</div>
                                                                                        </td>
                                                                                        <td>No Rating</td>
                                                                                        <td>
                                                                                            <div class="dropdown">
                                                                                                <button class="btn btn-dark dropdown-toggle" type="button" id="actionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                    Actions
                                                                                                </button>
                                                                                                <ul class="dropdown-menu" aria-labelledby="actionsDropdown">
                                                                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <!-- More rows can be added here -->
                                                                                </tbody>
                                                                            </table>
                                                                        </div><!-- end card-body -->
                                                                        
                                                                        
                                                                        
                                                                    </div><!-- end card -->
                                                                </div><!-- end col -->
                                                                
                                                            </div><!-- end row -->
                                                        </div><!-- end col -->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-schedule-shifts" role="tabpanel" aria-labelledby="v-pills-schedule-shifts-tab">
                                                    <div class="d-flex mb-2">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/small/img-5.jpg" alt="" width="150" class="rounded">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="mb-0"> I also decreased the transparency in the text so that the mountains come through the text, bringing the quote truly to life. Make sure that the placement of your text is pleasing to look at, and you try to achieve symmetry for this effect.</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary. You can always play around with the text that is overlaid on an image.
                                                    </p>
                                                </div>
                                                
                                            </div>
                                        </div><!--  end col -->
                                    </div>
                                    <!--end row-->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                        
                        <!--end col-->
                    </div>



                </div><!-- container-fluid -->
            </div><!-- End Page-content -->
        </div><!-- end main content -->
        
   
@endsection
    

@push('scripts')
<script>
    $(document).ready(function() {
        $('.category-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.sale.index') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'image', name: 'image' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
    </script>


<script>
    document.querySelectorAll('.user-icon').forEach(icon => {
    const name = icon.nextElementSibling.textContent; // Get the name from the span
    const firstLetter = name.charAt(0).toUpperCase(); // Get the first letter
    icon.querySelector('.placeholder').textContent = firstLetter; // Set it to the placeholder
});

</script>
@endpush 

