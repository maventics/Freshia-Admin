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
use App\Models\ServiceVariant;
use App\Models\User;
use App\Models\AdvancedOption;
use App\Models\ServiceResource;

class ServiceController extends Controller
{

    public function createService()
    {
        $serviceTypes = ServiceType::with('subServiceTypes')->get();
        $categories = Category::all();
        $durationHours = DurationHour::all();
        // $teamMembers = User::with('location')->where('role','!=','1')->get();

        $teamMembers = User::with(['teamLocations.branch'])->where('role', '!=', '1')->get();

        // dd($teamMembers);

        $service = Service::create();

        $serviceId = $service->id;

        return view('backend.catalog.create-service',compact('serviceTypes','categories','durationHours','teamMembers','serviceId'));
    }

    public function ServiceStore(Request $request)
    {
        // dd($request->all());
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
            'status' => '1',
        ]);

        if($request->has('member_ids')){
            foreach($request->member_ids as $ids)
            {
                TeamService::create([
                    'service_id'=>$service->id,
                    'user_id' => $ids
                ]);
            }
            
        }

        

        toast('Service added successfully','success');
        return redirect()->route('admin.catelog.index');
    }

    public function storeVariant(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
             'serviceId' => 'required|integer',
            'variantName' => 'required|string|max:255',
            'duration' => 'required|string',
            'priceType' => 'required|string',
            'price' => 'nullable|string',
            'sku' => 'nullable|string|max:255',
        ]);

        // Save the variant to the database
        $variant = new ServiceVariant(); 
        $variant->service_id = $validatedData['serviceId'];
        $variant->name = $validatedData['variantName'];
        $variant->duration = $validatedData['duration'];
        $variant->price_type = $validatedData['priceType'];
        $variant->price = $validatedData['price'];
        $variant->sku = $validatedData['sku'];
        $variant->save();

        return response()->json(['success' => true]);
    }

    public function storeAdvanceOptions(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        foreach ($data as $item) {
            AdvancedOption::create([
                'service_id' => $item['service_id'],
                'location_id' => $item['location_id'],
                'user_id' => $item['user_id'],
                'duration' => $item['duration'],
                'price_type' => $item['price_type'],
                'price' => $item['price']
            ]);
        }

        return response()->json(['success' => true]);
    }


    public function storeResource(Request $request)
    {
        $request->validate([
            'serviceId' => 'required|exists:services,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create the resource
        $resource = ServiceResource::create([
            'service_id' => $request->serviceId,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Fetch the newly created resource from the database
        return response()->json([
            'success' => true,
            'resource' => $resource,
        ]);
    }


    public function getResources($serviceId)
    {
        $resources = ServiceResource::where('service_id', $serviceId)->get();
        return response()->json($resources);
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
