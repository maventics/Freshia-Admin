@extends('backend.layouts.admin-master')
@section('title','Admin Dashboard')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        
                        <!--end row-->

                        <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Recent sales</h4>
                                        </div><!-- end card header -->
        
                                        <div class="card-body">
                                           <p>Last 7 days</p>
                                            <h3>PKR 87.00</h3>
                                            <div id="line_chart_datalabel" data-colors='["--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div>
                                <!-- end col -->
                                

                            {{-- <div class="col-xl-6">
                                <!-- card -->
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Upcoming Appiontments</h4>
                                        
                                    </div><!-- end card header -->

                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="px-2 py-2 mt-1">
                                            <div class="" style="height: 200px">
                                              <i class="ri-bar-chart-2-line" ></i>
                                              <h3>Your schedule is empty</h3>
                                              <p>Make some appointments for schedule data to appear</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div> --}}
                            <div class="col-xl-6">
                                <!-- card -->
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Upcoming Appointments</h4>
                                    </div><!-- end card header -->
                            
                                    <!-- card body -->
                                    <div class="card-body d-flex align-items-start justify-content-center">
                                        <div class="d-flex flex-column align-items-center text-start" style="height: 200px; margin-top:100px;">
                                            <i class="ri-bar-chart-2-line" style="font-size: 2.5rem;"></i>
                                            <h3 class="mt-2 mb-1">Your schedule is empty</h3>
                                            <p class="mb-0">Make some appointments for schedule data to appear</p>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            
                            

                            <!-- end col -->
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Appiontment Activity</h4>
                                        
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded me-2">
                                                                    <strong>16</strong>
                                                                    <p>Oct</p>
                                                                </div>
                                                                <div>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">{{now()->format('d-M-Y H:i:s')}} <a href="">Confirmed</a> </h5>
                                                                    <h5 class="mt-2 mx-2">Haircut</h5>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">Walk-in 1hr 30 min with <a href="">User</a> </h5>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <h4 class="">PKR 510</h4>
                                                        </td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded me-2">
                                                                    <strong>16</strong>
                                                                    <p>Oct</p>
                                                                </div>
                                                                <div>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">{{now()->format('d-M-Y H:i:s')}} <a href="">Confirmed</a> </h5>
                                                                    <h5 class="mt-2 mx-2">Haircut</h5>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">Walk-in 1hr 30 min with <a href="">User</a> </h5>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <h4 class="">PKR 510</h4>
                                                        </td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded me-2">
                                                                    <strong>16</strong>
                                                                    <p>Oct</p>
                                                                </div>
                                                                <div>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">{{now()->format('d-M-Y H:i:s')}} <a href="">Confirmed</a> </h5>
                                                                    <h5 class="mt-2 mx-2">Haircut</h5>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">Walk-in 1hr 30 min with <a href="">User</a> </h5>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <h4 class="">PKR 510</h4>
                                                        </td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded me-2">
                                                                    <strong>16</strong>
                                                                    <p>Oct</p>
                                                                </div>
                                                                <div>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">{{now()->format('d-M-Y H:i:s')}} <a href="">Confirmed</a> </h5>
                                                                    <h5 class="mt-2 mx-2">Haircut</h5>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">Walk-in 1hr 30 min with <a href="">User</a> </h5>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <h4 class="">PKR 510</h4>
                                                        </td>
                                                        
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded me-2">
                                                                    <strong>16</strong>
                                                                    <p>Oct</p>
                                                                </div>
                                                                <div>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">{{now()->format('d-M-Y H:i:s')}} <a href="">Confirmed</a> </h5>
                                                                    <h5 class="mt-2 mx-2">Haircut</h5>
                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">Walk-in 1hr 30 min with <a href="">User</a> </h5>

                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <h4 class="">PKR 510</h4>
                                                        </td>
                                                        
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                        

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <!-- card -->
                                <div class="card card-height-100">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Today's next appointments</h4>
                                    </div><!-- end card header -->
                            
                                    <!-- card body -->
                                    <div class="card-body d-flex align-items-start justify-content-center">
                                        <div class="d-flex flex-column align-items-center text-start" style="height: 200px; margin-top:100px;">
                                            <i class="ri-briefcase-2-fill" style="font-size: 2.5rem;"></i>
                                            <h3 class="mt-2 mb-1">No Appointments Today</h3>
                                            <p class="mb-0">Visit the calendar section to add some appointments</p>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div> <!-- end row-->

                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="card card-height-50">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Top Services</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>Service</th>
                                                <th>This Month</th>
                                                <th>Last Month</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Haircut</td>
                                                    <td>5</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Blow Dry</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- .card-->
                            </div> <!-- .col-->

                            <div class="col-xl-6 col-md-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Top team member</h4>
                                        
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <th>Team member</th>
                                                <th>This Month</th>
                                                <th>Last Month</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>John doe</td>
                                                    <td>PKR 87.00</td>
                                                    <td>PKR 0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>James</td>
                                                    <td>PKR 87.00</td>
                                                    <td>PKR 8.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- .card-->
                            </div> <!-- .col-->
                        </div> <!-- end row-->

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->

                {{-- <div class="col-auto layout-rightside-col">
                    <div class="overlay"></div>
                    <div class="layout-rightside">
                        <div class="card h-100 rounded-0">
                            <div class="card-body p-0">
                                <div class="p-3">
                                    <h6 class="text-muted mb-0 text-uppercase fw-semibold">Recent Activity</h6>
                                </div>
                                <div data-simplebar style="max-height: 410px;" class="p-3 pt-0">
                                    <div class="acitivity-timeline acitivity-main">
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                <div class="avatar-title bg-soft-success text-success rounded-circle">
                                                    <i class="ri-shopping-cart-2-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Purchase by James Price</h6>
                                                <p class="text-muted mb-1">Product noise evolve smartwatch </p>
                                                <small class="mb-0 text-muted">02:14 PM Today</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0 avatar-xs acitivity-avatar">
                                                <div class="avatar-title bg-soft-danger text-danger rounded-circle">
                                                    <i class="ri-stack-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Added new <span class="fw-semibold">style collection</span></h6>
                                                <p class="text-muted mb-1">By Nesta Technologies</p>
                                                <div class="d-inline-flex gap-2 border border-dashed p-2 mb-2">
                                                    <a href="apps-ecommerce-product-details.html" class="bg-light rounded p-1">
                                                        <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                    </a>
                                                    <a href="apps-ecommerce-product-details.html" class="bg-light rounded p-1">
                                                        <img src="assets/images/products/img-2.png" alt="" class="img-fluid d-block" />
                                                    </a>
                                                    <a href="apps-ecommerce-product-details.html" class="bg-light rounded p-1">
                                                        <img src="assets/images/products/img-10.png" alt="" class="img-fluid d-block" />
                                                    </a>
                                                </div>
                                                <p class="mb-0 text-muted"><small>9:47 PM Yesterday</small></p>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Natasha Carey have liked the products</h6>
                                                <p class="text-muted mb-1">Allow users to like products in your WooCommerce store.</p>
                                                <small class="mb-0 text-muted">25 Dec, 2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-secondary">
                                                        <i class="mdi mdi-sale fs-14"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Today offers by <a href="apps-ecommerce-seller-details.html" class="link-secondary">Digitech Galaxy</a></h6>
                                                <p class="text-muted mb-2">Offer is valid on orders of Rs.500 Or above for selected products only.</p>
                                                <small class="mb-0 text-muted">12 Dec, 2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-soft-danger text-danger">
                                                        <i class="ri-bookmark-fill"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Favoried Product</h6>
                                                <p class="text-muted mb-2">Esther James have favorited product.</p>
                                                <small class="mb-0 text-muted">25 Nov, 2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-secondary">
                                                        <i class="mdi mdi-sale fs-14"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Flash sale starting <span class="text-primary">Tomorrow.</span></h6>
                                                <p class="text-muted mb-0">Flash sale by <a href="javascript:void(0);" class="link-secondary fw-medium">Zoetic Fashion</a></p>
                                                <small class="mb-0 text-muted">22 Oct, 2021</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item py-3 d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-xs acitivity-avatar">
                                                    <div class="avatar-title rounded-circle bg-soft-info text-info">
                                                        <i class="ri-line-chart-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Monthly sales report</h6>
                                                <p class="text-muted mb-2"><span class="text-danger">2 days left</span> notification to submit the monthly sales report. <a href="javascript:void(0);" class="link-warning text-decoration-underline">Reports Builder</a></p>
                                                <small class="mb-0 text-muted">15 Oct</small>
                                            </div>
                                        </div>
                                        <div class="acitivity-item d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle acitivity-avatar" />
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="mb-1 lh-base">Frank Hook Commented</h6>
                                                <p class="text-muted mb-2 fst-italic">" A product that has reviews is more likable to be sold than a product. "</p>
                                                <small class="mb-0 text-muted">26 Aug, 2021</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3 mt-2">
                                    <h6 class="text-muted mb-3 text-uppercase fw-semibold">Top 10 Categories
                                    </h6>

                                    <ol class="ps-3 text-muted">
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Mobile & Accessories <span class="float-end">(10,294)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Desktop <span class="float-end">(6,256)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Electronics <span class="float-end">(3,479)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Home & Furniture <span class="float-end">(2,275)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Grocery <span class="float-end">(1,950)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Fashion <span class="float-end">(1,582)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Appliances <span class="float-end">(1,037)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Beauty, Toys & More <span class="float-end">(924)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Food & Drinks <span class="float-end">(701)</span></a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="text-muted">Toys & Games <span class="float-end">(239)</span></a>
                                        </li>
                                    </ol>
                                    <div class="mt-3 text-center">
                                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all Categories</a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h6 class="text-muted mb-3 text-uppercase fw-semibold">Products Reviews</h6>
                                    <!-- Swiper -->
                                    <div class="swiper vertical-swiper" style="height: 250px;">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-sm">
                                                                <div class="avatar-title bg-light rounded">
                                                                    <img src="assets/images/companies/img-1.png" alt="" height="30">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines"> " Great product and looks great, lots of features. "</p>
                                                                    <div
                                                                        class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Force Medicines</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines"> " Amazing template, very easy to understand and manipulate. "</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-half-fill"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Henry Baird</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-sm">
                                                                <div class="avatar-title bg-light rounded">
                                                                    <img src="assets/images/companies/img-8.png" alt="" height="30">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines"> "Very beautiful product and Very helpful customer service."</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-line"></i>
                                                                        <i class="ri-star-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Zoetic Fashion</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card border border-dashed shadow-none">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <div>
                                                                    <p class="text-muted mb-1 fst-italic text-truncate-two-lines">" The product is very beautiful. I like it. "</p>
                                                                    <div class="fs-11 align-middle text-warning">
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-fill"></i>
                                                                        <i class="ri-star-half-fill"></i>
                                                                        <i class="ri-star-line"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text-end mb-0 text-muted">
                                                                    - by <cite title="Source Title">Nancy Martino</cite>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-3">
                                    <h6 class="text-muted mb-3 text-uppercase fw-semibold">Customer Reviews</h6>
                                    <div class="bg-light px-3 py-2 rounded-2 mb-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <div class="fs-16 align-middle text-warning">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h6 class="mb-0">4.5 out of 5</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="text-muted">Total <span class="fw-medium">5.50k</span> reviews</div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">5 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50.16%" aria-valuenow="50.16" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">2758</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">4 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 29.32%" aria-valuenow="29.32" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">1063</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">3 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 18.12%" aria-valuenow="18.12" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">997</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">2 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 4.98%" aria-valuenow="4.98" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">227</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row align-items-center g-2">
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0">1 star</h6>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="p-1">
                                                    <div class="progress animated-progress progress-sm">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 7.42%" aria-valuenow="7.42" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="p-1">
                                                    <h6 class="mb-0 text-muted">408</h6>
                                                </div>
                                            </div>
                                        </div><!-- end row -->
                                    </div>
                                </div>

                                <div class="card sidebar-alert bg-light border-0 text-center mx-4 mb-0 mt-3">
                                    <div class="card-body">
                                        <img src="assets/images/giftbox.png" alt="">
                                        <div class="mt-4">
                                            <h5>Invite New Seller</h5>
                                            <p class="text-muted lh-base">Refer a new seller to us and earn $100 per refer.</p>
                                            <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-fill label-icon align-middle rounded-pill fs-16 me-2"></i> Invite Now</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end .rightbar-->

                </div> <!-- end col --> --}}
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('backend.layouts.inc.footer')
</div>
@endsection

@push('scripts')
<script src="{{asset('assets/backend/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="../../../../apexcharts.com/samples/assets/stock-prices.js"></script>

<!-- linecharts init -->
<script src="{{asset('assets/backend/js/pages/apexcharts-line.init.js')}}"></script>
@endpush