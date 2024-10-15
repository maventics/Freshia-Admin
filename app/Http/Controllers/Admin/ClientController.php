<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;


class ClientController extends Controller
{
    public function index(Request $request)
    {
        
        $title = 'Delete Client!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        if ($request->ajax()) {
            $data = Client::all();
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function($row){
                    return  $row->created_at->format('d-m-Y');
                })
                ->addColumn('image', function($row){
                    $imagePath = asset($row->image);
                    return  '<img src="'.$imagePath.'"  class="category-image" />';
                })
                ->addColumn('action', function($row){
                    $editUrl = route('admin.client.edit', $row->id);
                    $deleteUrl = route('admin.client.destroy', $row->id);
    
                    return '
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton'.$row->id.'" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton'.$row->id.'">
                                <li><a class="dropdown-item" href="'.$editUrl.'"><i class="bi bi-pencil-square"></i> Edit</a></li>
                                <li><a class="dropdown-item" href="'.$deleteUrl.'" data-confirm-delete="true"><i class="bi bi-trash3"></i> Delete</a></li>
                                
                            </ul>
                        </div>';
                })
                ->rawColumns(['image','action'])
                ->make(true);
        }
    
        return view('backend.client.index');
    }

    public function create()
    {
        return view('backend.client.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'image'=> 'required',
            'description'=>'required'
        ]);

        if($request->has('image')){
            $file =  $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('assets/backend/uploads/category',$fileName);
        }
        $slug = Str::slug($request->name);
        Client::create([
            'name'=>$request->name,
            'slug'=>$slug,
            'image'=>$fileName,
            'description'=>$request->description,
        ]);

        toast('Client added successfully','success');
        return redirect()->route('admin.client.index');
    }

    public function edit($id)
    {
        $client =  Client::find($id);
        if(!$client){
            toast('No client found','error');
            return redirect()->back();
        }

        return view('backend.client.edit',compact('client'));
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=> 'required',
            'image'=> 'nullable',
            'description'=>'required'
        ]);
        $category = Client::find($id);
        if(!$category){
            toast('No category found','error');
            return redirect()->back();
        }
        if($request->hasFile('image')){
            $file =  $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $uploadPath = 'assets/backend/uploads/category';
            $file->move($uploadPath,$fileName);
        

        if($category->image && file_exists($uploadPath.'/'.$category->image)){
            unlink($uploadPath.'/'.$category->image);
        }

        $category->image = $fileName;
        }

        $slug = Str::slug($request->name);

        $category->update([
            'name'=>$request->name,
            'slug'=>$slug,
            'description'=>$request->description,

        ]);
        toast('Category updated successfully','success');

        return redirect()->route('admin.category.index');
    }


    public function destroy($id)
    {
        $client = Client::find($id);
        if(!$client){
            toast('No client found','error');
            return redirect()->back();
        }


        if($client->image && file_exists($client->image)){
            unlink($client.'/'.$client->image);
        }

        $client->delete();
        toast('Client deleted successfully','success');

        return redirect()->route('admin.client.index');
    }
}
