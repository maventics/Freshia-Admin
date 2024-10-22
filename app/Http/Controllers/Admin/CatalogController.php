<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\DurationHour;
use App\Models\Service;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('backend.catalog.index',compact('services'));
    }

   
    public function createService()
    {
        $serviceTypes = ServiceType::with('subServiceTypes')->get();
        $categories = Category::all();
        $durationHours = DurationHour::all();

        return view('backend.catalog.create-service',compact('serviceTypes','categories','durationHours'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
