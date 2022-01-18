<?php

namespace App\Http\Controllers;

use App\Models\Pertamina;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PertaminaController extends Controller
{
    public function index()
    {
        $pertamina = Pertamina::get();
        $region = Region::all();
        $user = Auth::user();
        return view('admin.pertamina.list-pertamina', compact('pertamina','region', 'user'));
    }
    public function add()
    {
        $user = Auth::user();
        $pertamina = Pertamina::get();
        $region = Region::get();
        return view('admin.pertamina.add-pertamina', compact('pertamina','user', 'region'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'code' => 'required',
            'region_id' => 'required'
        ]);

        Pertamina::create([
            'name' => $request->name,
            'address' => $request->address,
            'code' => $request->code,
            'region_id' => $request->region_id,
        ]);
        return redirect('/pertamina/list-pertamina');
    }
    public function edit($id)
    {
        $pertamina = Pertamina::find($id);
        $region = Region::get();
        $user = Auth::user();
        return view('admin.pertamina.edit-pertamina', compact('pertamina', 'user', 'region'));
    }
    public function update($id, Request $request)
    {
        $data = $request->all();
        $pertamina =Pertamina::find($id);

        $rules = [
            'name'          => 'required',
            'address'       => 'required',
            'code'          => 'required',
            'region_id'     => 'required',
        ];
        $this->validate($request, [
        ]);
        Validator::make($data, $rules);
        $pertamina->update($data);
        return redirect('/pertamina/list-pertamina');
    }
    public function delete($id)
    {
        $pertamina = Pertamina::find($id);
        $pertamina->delete();
        return redirect('/pertamina/list-pertamina');
    }
}
