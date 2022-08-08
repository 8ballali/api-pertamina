<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Isi_Tank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Isi_TankController extends Controller
{
    public function index(Request $request)
    {
        $isi_tank = Isi_Tank::with('tank')->with('type')
        ->when(($request->get('tank_id')), function ($query) use ($request)
        {
            $query->where('tank_id', $request->get('tank_id'));
        })->when(($request->get('type_id')), function ($query) use ($request)
        {
            $query->where('type_id', $request->get('type_id'));
        })
        ->get();
        if ($isi_tank->isNotEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Data Isi Tank',
                'data' => $isi_tank
            ],200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'Data Not Found',
                'data' =>[]
            ],200);
        }
    }
    public function show($id)
    {
        $isi_tank = Isi_Tank::find($id);
        if ($isi_tank) {
            return response()->json([
                'success' => true,
                'message' => 'Data Isi Tank',
                'data' => $isi_tank
            ],200);
        }
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'tank_id'          => 'required',
            'type_id'          => 'required',
            'value'          => 'required',
            'status'          => 'required',
            'nomor_tank'          => 'required'
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $isi_tank = Isi_Tank::create($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Isi Tank Created',
            'data' => $isi_tank
        ],200);
    }
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $isi_tank = Isi_Tank::find($id);
        $rules = [
            'status'          => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $isi_tank->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Isi Tank Updated',
            'data' => $isi_tank
        ],200);
    }
}
