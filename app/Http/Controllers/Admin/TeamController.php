<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;
class TeamController extends Controller
{
    public function index(Request $request)
    {
        
        return view('backend.team.index');
    }

    public function create()
    {
        
        return view('backend.team.create');
    }

}
