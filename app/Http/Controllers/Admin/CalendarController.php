<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\User;

class CalendarController extends Controller
{
    public function index()
    {
        $users = User::with('bookings')->where('role','!=','1')->get();

        return view('backend.calendar.index',compact('users'));
        
    }

    public function fetchEvents()
    {
        $users = User::where('role','!=','1')->get();
        // dd($bookings);
        $events = $users->map(function ($user) {
            return [
                'title' => $user->fname,          // Display the user's name
                'start' => now()->startOfDay(),  // Start time (use dynamic data if applicable)
                'end' => now()->endOfDay(),      // End time (adjust as needed)
                'user_id' => $user->id,
            ];
        });

        return response()->json($events);
    }

    public function fetchResources()
    {
        $users = User::where('role','!=','1')->get(); // Fetch all users or specific team members

        $resources = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'title' => $user->name, // User's name as the resource title
            ];
        });

        return response()->json($resources);
    }


    
}
