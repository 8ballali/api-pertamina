<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Spbu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SPBUController extends Controller
{
    public function index()
    {
        $spbu = Spbu::with('region')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data Spbu',
            'data' => $spbu
        ],200);
    }
    public function show($id)
    {
        $spbu = Spbu::find($id);
        if ($spbu  ) {
            return response()->json([
                'success' => true,
                'message' => 'Data Spbu',
                'data' => $spbu
            ],200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'Data Not Found'
            ],200);
        }

    }
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required',
            'code' => 'required',
            'region_id' => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $spbu = Spbu::create($data);
        return response()->json([
            'success' => true,
            'message' => "Data Spbu Created",
            'data' => $spbu
        ],200);

    }
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $spbu = Spbu::find($id);
        $rules = [
            'name'          => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $spbu->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Data SPBU Updated',
            'data' => $spbu
        ],200);
    }
    public function delete($id)
    {
        $spbu = Spbu::find($id);
        $spbu->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data SPBU Deleted'
        ],200);

    }
}
