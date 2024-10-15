<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(),[
                'category_name' => 'required',
                'category_color' => 'required',
                'description' => 'required',
            ]);

            if ($validator->fails()) {
                return back()->with('danger' , $validator->errors());
            }

            $category = Category::create([
                'category_name' => $request->category_name,
                'category_color' => $request->category_color,
                'description' => $request->description,
            ]);
            return back()->with('success' , 'Category added Successfully!');
        } catch (Exception $ex) {
            return back()->with('danger' , $ex->getMessage());
        }
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
