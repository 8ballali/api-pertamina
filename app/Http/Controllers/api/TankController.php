<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Tank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TankController extends Controller
{
    public function index()
    {
        $tank = Tank::with('isi_tank')->get();
        return response()->json([
            'success' =>true,
            'message' => 'Data Tank',
            'data' => $tank
        ],200);
    }
    public function show($id)
    {
        $tank = Tank::find($id);
        if ($tank) {
            return response()->json([
                'success' =>true,
                'message' => 'Data Tank',
                'data' => $tank
            ],200);
        }else {
            return response()->json([
                'success' =>false,
                'message' => 'Data Not Found',
            ],200);
        }
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required',
            'mac' => 'required',
            'plat' => 'required',
            'total_container' => 'required',
            'capacity' => 'required'
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $pertamina = Tank::create($data);
        return response()->json([
            'success' => true,
            'message' => "Data Tank Created",
            'data' => $pertamina
        ],200);
    }
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $tank = Tank::find($id);
        $rules = [
            'name'          => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $tank->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Tank Updated',
            'data' => $tank
        ],200);
    }
    public function delete($id)
    {
        $tank = Tank::find($id);
        $tank->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Tank Deleted'
        ],200);
    }
}
