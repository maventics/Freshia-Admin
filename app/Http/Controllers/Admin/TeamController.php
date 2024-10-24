<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\EmploymentDetail;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role','!=','1')->get();
       
        return view('backend.team.index',compact('users'));
    }

    public function create()
    {
        $countries = Country::select('id', 'country')->get();
        $phoneCodes = Country::select('id', 'phone_code')->get();
        
        return view('backend.team.create', compact('countries', 'phoneCodes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
        ]);

        $image = 'null';

        if($request->has('image')){
            $file = $request->file('image');
           $fileName = time().'.'. $file->getClientOriginalExtension();
           $file->move('assets/backend/uploads/team/',$fileName);
           $image = 'assets/backend/uploads/team/'.$fileName;
        }

        $user = User::create([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'password'=> Hash::make('12345678'),
            'role'=>'2',
            'image'=>$image,
            'code'=>$request->phone_code,
            'phone'=>$request->phone,
            'dob'=>$request->dob,
            'job_title'=>$request->job_title,
            'country'=>$request->country

        ]);

        toast('Team member added successfully','success');
        return redirect()->route('admin.team.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if($user->image && file_exists($user->image)){
            @unlink($user->image);
        }
        if ($user) {
            $user->delete();
            return response()->json(['success' => 'User deleted successfully']);
        }

        return response()->json(['error' => 'User not found'], 404);
    }


}
