<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Pertamina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PertaminaController extends Controller
{
    public function index()
    {
        $pertamina = Pertamina::get();
        return response()->json([
            'success' => true,
            'message' => "Data Pertamina",
            'data' => $pertamina
        ],200);
    }
    public function show($id)
    {
        $pertamina = Pertamina::find($id);
        if ($pertamina) {
            return response()->json([
                'success' => true,
                'message' => "Data Pertamina",
                'data' => $pertamina
            ], 200);
        }else {
            return response()->json([
                'success' => false,
                'message' => "Data Not Found"
            ],200);
        }
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required',
            'address' => 'required',
            'code' => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $pertamina = Pertamina::create($data);
        return response()->json([
            'success' => true,
            'message' => "Data Pertamina Created",
            'data' => $pertamina
        ],200);
    }
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $pertamina = Pertamina::find($id);
        $rules = [
            'name'          => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $pertamina->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Updated',
            'data' => $pertamina
        ],200);
    }
    public function delete($id)
    {
        $pertamina = Pertamina::find($id);
        try {
            $pertamina->delete();
            return response()->json([
                'success' => true,
                'message' => 'Data Deleted'
            ],200);
        } catch ( QueryException $e ) {
            return response()->json([
                'message' => "Failed " . $e->errorInfo
            ],200);
        }
    }
}
