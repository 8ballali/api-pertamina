<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegionController extends Controller
{
    public function index()
    {
        $region = Region::get();
        $user = Auth::user();
        return view('admi.list-region', compact('region', 'user'));
    }
    public function add()
    {
        $user = Auth::user();
        $region = Region::get();

    }
}
