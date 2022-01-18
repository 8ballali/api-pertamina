<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Spbu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SPBUController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $spbu = Spbu::get();
        $region = Region::get();
        return view('admin.spbu.list-spbu', compact('user', 'spbu', 'region'));
    }
    public function add()
    {
        $user = Auth::user();
        $region = Region::get();
        return view('admin.spbu.add-spbu', compact('user', 'region'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required',
            'address' => 'required',
            'region_id' => 'required'
        ]);

        Spbu::create([
            'name' => $request->name,
            'code' => $request->code,
            'address' => $request->address,
            'region_id' => $request->region_id,
        ]);
        return redirect('/pertamina/list-spbu');
    }
    public function edit($id)
    {
        $spbu = Spbu::find($id);
        $region = Region::get();
        $user = Auth::user();
        return view('admin.spbu.edit-spbu', compact('spbu', 'user', 'region'));
    }
    public function update($id, Request $request)
    {
        $data = $request->all();
        $spbu = Spbu::find($id);

        $rules = [
            'name'          => 'required',
            'code'   => 'required',
            'address'         => 'required',
            'region_id'      => 'required',
        ];
        $this->validate($request, [
        ]);
        Validator::make($data, $rules);
        $spbu->update($data);
        return redirect('/pertamina/list-spbu');
    }
    public function delete($id)
    {
        $spbu = Spbu::find($id);
        $spbu->delete();
        return redirect('/pertamina/list-spbu');
    }
}
