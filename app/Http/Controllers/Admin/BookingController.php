<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingService;
use Database\Seeders\BookingSeeder;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function storeBooking(Request $request)
    {
        // dd($request->all());
        $booking = Booking::create([
            'user_id'=>$request->booking_team_member,
            'client_id'=>$request->booking_client,
            
        ]);

        $serviceIds = explode(',', $request->services[0]);

        foreach ($serviceIds as $serviceId) {
            BookingService::create([
                'booking_id' => $booking->id,
                'service_id' => $serviceId,
            ]);

        }

        toast('Booking added successfully','success');
        return redirect()->back();
    }
}
