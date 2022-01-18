<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index()
    {
        $staff = User::where('role_id', '2')->get();
        $user = Auth::user();
        $region = Region::get();
        $role = Roles::where('id', '2')->get();
        // dd($region);
        return view('admin.pertamina.staff.list-staff', compact('staff', 'user','region', 'role'));
    }
    // public function add()
    // {
    //     $region = Region::all();
    //     $role  = Roles::all();
    //     $user = Auth::user();
    //     $staff = User::where('role_id', '2')->get();
    //     dd($staff);
    //     return view('admin.pertamina.staff.list-staff', compact('region', 'role', 'user'));
    // }
}
