@extends('backend.layouts.admin-master')
@section('title','Admin Dashboard | Catalog')
@section('content')
@if ($message = Session::get('success'))

<div id="successMessage"
    class="alert alert-success alert-dismissible alert-solid alert-label-icon fade show position-fixed top-0 end-0"
    style="z-index: 9999; margin-top: 25px;" role="alert">
    <i class="ri-check-double-line label-icon"></i><strong>{{ $message }}</strong>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($message = Session::get('danger'))
<div id="dangerMessage"
    class="alert alert-danger alert-dismissible alert-solid alert-label-icon fade show position-fixed top-0 end-0"
    style="z-index: 9999; margin-top: 25px;" role="alert">
    <i class="ri-error-warning-line label-icon"></i><strong>{{ $message }}</strong>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Catalog</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Catalog</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <h2>Service menu</h2>
            <p>View and manage the services offered by your business. <a href="">Learn more</a></p>
            <div class="card mt-4   ">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-sm-4">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Search for name, tasks, projects or something..." style="border-radius: 20px;">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-sm-auto d-flex justify-content-between" >
                            <div class="list-grid-nav hstack gap-1">
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                    <li><a class="dropdown-item" href="#">All</a></li>
                                    <li><a class="dropdown-item" href="#">Last Week</a></li>
                                    <li><a class="dropdown-item" href="#">Last Month</a></li>
                                    <li><a class="dropdown-item" href="#">Last Year</a></li>
                                </ul>
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addmembers">
                                    <i class="ri-add-fill me-1 align-bottom"></i> Filter
                                </button>
                            </div>
                            <div class="mr-auto" style="margin-left: 390px">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addmembers">
                                    <i class="ri-add-fill me-1 align-bottom"></i> Manage Order
                                </button>
                            </div>
                        </div>
                        
                        
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card card-h-100">
                                <ul class="navbar-nav" id="navbar-nav" style="margin: 20px;">
                                    <h2>Catalog</h2>
                                    <li class="nav-item">
                                        <button class="btn catalog-btn" style="font-size: 16px;">Services Menu</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="btn catalog-btn" style="font-size: 16px;">Memberships</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="btn catalog-btn" style="font-size: 16px;">Products</button>
                                    </li>
                                    <h2 class="mt-4">Inventory</h2>
                                    <li class="nav-item">
                                        <button class="btn catalog-btn" style="font-size: 16px;">Stock Takes</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="btn catalog-btn" style="font-size: 16px;">Stock Order</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="btn catalog-btn" style="font-size: 16px;">Supplier</span>
                                    </li>
                                    
                    
                                </ul>
                            </div>
                            <!--end card-->
                        </div> <!-- end col-->
                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Nail & Styling</h4>
                                </div><!-- end card header -->
                                <div class="card-body form-steps">
                                    <form class="vertical-navs-step">
                                        <div class="row gy-5">
                                            <div class="col-lg-4">
                                                <h3>Category</h3>
                                                <div class="nav flex-column custom-nav nav-pills mt-3" role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link done" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                        <span class="step-title me-2" style="display: flex; align-items: center;">
                                                            <div style="width: 25px; height: 25px; border-radius: 50%; background-color: #f0f0ff; display: flex; align-items: center; justify-content: center; margin-right: 5px;">
                                                                12
                                                            </div>
                                                            &nbsp;&nbsp;&nbsp;Billing Info
                                                        </span>
                                                    </button>
                                                    <button class="nav-link done" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                        <span class="step-title me-2" style="display: flex; align-items: center;">
                                                            <div style="width: 25px; height: 25px; border-radius: 50%; background-color: #f0f0ff; display: flex; align-items: center; justify-content: center; margin-right: 5px;">
                                                                8
                                                            </div>
                                                            &nbsp;&nbsp;&nbsp;Hair Styling 
                                                        </span>
                                                    </button>
                                                    <button class="nav-link done" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                        <span class="step-title me-2" style="display: flex; align-items: center;">
                                                            <div style="width: 25px; height: 25px; border-radius: 50%; background-color: #f0f0ff; display: flex; align-items: center; justify-content: center; margin-right: 5px;">
                                                                0
                                                            </div>
                                                            &nbsp;&nbsp;&nbsp;Nail
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#varyingcontentModal">Add New Category</button>
                                                    <!-- Varying modal content -->

                                                </div>
                                                <!-- end nav -->
                                            </div> <!-- end col-->
                                            <div class="col-lg-8">
                                                <div class="px-lg-8">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                            <div>
                                                                <h5>Billing Info</h5>
                                                                <p class="text-muted">Fill all information below</p>
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

                                                                    <div class="col-12">
                                                                        <label for="username" class="form-label">Username</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-text">@</span>
                                                                            <input type="text" class="form-control" id="username" placeholder="Username">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                                                        <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Shipping</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade show active" id="v-pills-bill-address" role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                                                            <div>
                                                                <h5>Shipping Address</h5>
                                                                <p class="text-muted">Fill all information below</p>
                                                            </div>

                                                            <div>
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <label for="address" class="form-label">Address</label>
                                                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                                                    </div>

                                                                    <div class="col-md-5">
                                                                        <label for="country" class="form-label">Country</label>
                                                                        <select class="form-select" id="country">
                                                                            <option value="">Choose...</option>
                                                                            <option>United States</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <label for="state" class="form-label">State</label>
                                                                        <select class="form-select" id="state">
                                                                            <option value="">Choose...</option>
                                                                            <option>California</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="zip" class="form-label">Zip</label>
                                                                        <input type="text" class="form-control" id="zip" placeholder="">
                                                                    </div>
                                                                </div>

                                                                <hr class="my-4 text-muted">

                                                                <div class="form-check mb-2">
                                                                    <input type="checkbox" class="form-check-input" id="same-address">
                                                                    <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="save-info">
                                                                    <label class="form-check-label" for="save-info">Save this information for next time</label>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Billing Info</button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Payment</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                                                            <div>
                                                                <h5>Payment</h5>
                                                                <p class="text-muted">Fill all information below</p>
                                                            </div>

                                                            <div>
                                                                <div class="my-3">
                                                                    <div class="form-check form-check-inline">
                                                                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                                                        <label class="form-check-label" for="credit">Credit card</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                                                        <label class="form-check-label" for="debit">Debit card</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                                                        <label class="form-check-label" for="paypal">PayPal</label>
                                                                    </div>
                                                                </div>

                                                                <div class="row gy-3">
                                                                    <div class="col-md-12">
                                                                        <label for="cc-name" class="form-label">Name on card</label>
                                                                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                                                        <small class="text-muted">Full name as displayed on card</small>
                                                                        <div class="invalid-feedback">
                                                                            Name on card is required
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <label for="cc-number" class="form-label">Credit card number</label>
                                                                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                                                        <div class="invalid-feedback">
                                                                            Credit card number is required
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="cc-expiration" class="form-label">Expiration</label>
                                                                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                                                        <div class="invalid-feedback">
                                                                            Expiration date required
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <label for="cc-cvv" class="form-label">CVV</label>
                                                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                                                        <div class="invalid-feedback">
                                                                            Security code required
                                                                        </div>
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
                                                            <div class="text-center pt-4 pb-2">

                                                                <div class="mb-4">
                                                                    <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                                </div>
                                                                <h5>Your Order is Completed !</h5>
                                                                <p class="text-muted">You Will receive an order confirmation email with details of your order.</p>
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

                    </div>
                    <!--end row-->

                    <!-- end modal-->
                </div>
            </div> <!-- end row-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>

{{-- category modal  --}}
<div class="modal fade" id="varyingcontentModal" tabindex="-1" aria-labelledby="varyingcontentModalLabel" aria-hidden="true"  style="padding: 50px;">
    <div class="modal-dialog category-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyingcontentModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/category/store') }}" method="post" >
                    @csrf
                    <div class="mb-3">
                        <label for="category_name" class="col-form-label">Category Name:</label>
                        <input type="text" name="category_name"  class="form-control" id="category_name" placeholder="e.g Hair Services">
                    </div>
                    <div class="mb-3">
                        <label for="category-color">Category Color</label>
                        <select name="category_color" id="category-color" class="form-control">
                            <option value="red">Red</option>
                            <option value="blue">Blue</option>
                            <option value="green">Green</option>
                            <option value="yellow">Yellow</option>
                        </select>
                        
                    </div>
                    <div class="mb-3">
                        <label for="description-text" class="col-form-label">Description:</label>
                        <textarea name="description" class="form-control" id="description-text"></textarea>
                    </div>
                <button type="button" class="btn btn-light" data-bs-dismiss="modal" style="width: 227px;padding: 14px;border: 30px;">Close</button>
                {{-- <button type="submit" class="btn btn-primary">Create Category</button> --}}
                <input type="submit" value="Create Category" class="btn btn-outline-dark" style="width: 227px;padding: 14px;border: 30px;">
        </div>

        </form>
        </div>
    </div>
  </div>
{{-- category modal  --}}

<script>
    // Select the li element
    const navItem = document.querySelector('.catalog-btn');

    // Add a click event listener
    navItem.addEventListener('click', function() {
        // Change background color to grey
        navItem.style.backgroundColor = ' #f0f0ff';
    });
</script>
@endsection