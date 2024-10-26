<div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>Location and team members</th>
                <th>Duration</th>
                <th>Price type</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Branch 1 
                    Address 1
                </td>
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
                    <select name="duration_hr" class="form-select" id="">
                        <option value=""  >Duration hours</option>
                        @forelse ($durationHours as $durationHour)
                            <option value="{{ $durationHour->duration_hr }}" style="font-size: 15px;" >{{ $durationHour->duration_hr }}</option>
                        @empty
                            <option value="">No duration hours available</option>
                        @endforelse
                    </select>
                </td>
                <td>
                    <select name="price_type" class="form-select" id="AdvOptpriceType">
                        <option value="adv_opt_price_type_fixed" selected >Fixed (Default)</option>
                        <option value="adv_opt_price_type_free">Free</option>
                        <option value="adv_opt_price_type_from">From</option>
                    </select>
                </td>
                <td>
                    <div class="col-md-4" id="priceContainer">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="adv_opt_price_type_free" id="adv_opt_price_type_price" placeholder="USD 0.00">
                    </div>
                </td>
              
            </tr>
            
        </tbody>
    </table>
</div>





protected $fillable = [
    'service_id',
    'user_id',
    'location_id',
    'duration',
    'price_type',
    'price'
];



$table->unsignedBigInteger('service_id')->nullable();
$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
$table->unsignedBigInteger('user_id')->nullable();;
$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
$table->unsignedBigInteger('location_id')->nullable();;
$table->foreign('location_id')->references('id')->on('branch_addresses')->onDelete('cascade');
$table->string('duration')->nullable();
$table->string('price_type')->nullable();
$table->string('price')->nullable();