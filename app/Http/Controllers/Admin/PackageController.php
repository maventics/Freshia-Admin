<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use App\Models\PackageService;
use App\Models\Service;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $services = Service::where('status','=','1')->get();
        $package = Package::create();
        $packageId = $package->id;


        return view('backend.package.create',compact('categories','services','packageId'));
    }

    public function StoreServicePackage(Request $request)
    {
        // dd($request->service_id);
        
        PackageService::create([
            'service_id' => $request->service_id,
            'package_id' => $request->package_id,
        ]);
        

        return response()->json(['success' => true, 'message' => 'Service saved successfully']);
    }

}
