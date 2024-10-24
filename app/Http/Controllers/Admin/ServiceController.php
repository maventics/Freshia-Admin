<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\TeamService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ServiceType;
use App\Models\Category;
use App\Models\DurationHour;
use App\Models\User;

class ServiceController extends Controller
{

    public function createService()
    {
        $serviceTypes = ServiceType::with('subServiceTypes')->get();
        $categories = Category::all();
        $durationHours = DurationHour::all();
        $teamMembers = User::where('role','!=','1')->get();

        return view('backend.catalog.create-service',compact('serviceTypes','categories','durationHours','teamMembers'));
    }

    public function ServiceStore(Request $request)
    {
        $request->validate([
           'servicename' =>'required',
            'service_type' =>'required',
            'menucategory'=>'required',
            'description'=>'required',
            'duration_hr'=>'required',
            'price_type'=> 'required',
            'price'=>'required',
            
        ]);

       $service = Service::create([
            'service_name' =>$request->servicename,
            'service_type_id'  =>$request->service_type,
            'category_id' =>$request->menucategory,
            'description' =>$request->description,
            'duration' =>$request->duration_hr,
            'price_type' =>$request->price_type,
            'price' =>$request->price,
            'extra_time_type' =>$request->extra_time_type ?? null,
            'extra_time_duration' =>$request->extra_time_duration ?? null,
        ]);

        TeamService::create([
            'service_id'=>$service->id,
            'user_id' => '1'
        ]);

        toast('Service added successfully','success');
        return redirect()->route('admin.catelog.index');
    }

    public function destroy($id)
    {
        $service = Service::find($id);

        if (!$service) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        $service->delete();
        return response()->json(['message' => 'Service deleted successfully']);
    }

}
