<div class="card-body">
    <div class="table-responsive table-card">
        <table class="table table-hover table-centered align-middle table-nowrap mb-0">
           
            <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h5 class="mt-2 mx-2">Variant name</h5>
                                    <h5 class="mx-2 fs-14 my-1 text-muted">5min</h5>
                                </div>
                            </div>
                        </td>
                        <td>
                            
                            <h4 class="float-end">$12</h4>
                        </td>
                        <td>
                            <div class="dropdown float-end">
                                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-fill"></i> <!-- Use a suitable icon -->
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item text-danger" href="#" onclick="deleteService({{ $service->id }})">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>No Service available</td>
                    </tr>
            </tbody>
            
        </table>
    </div>
</div><!-- end card-body -->