<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    public function index()
    {
        $type = Type::get();
        return response()->json([
            'success' => true,
            'message' => "Data Jenis BBM",
            'data' => $type
        ],200);
    }
    public function show($id)
    {
        $type = Type::find($id);
        if ($type) {
            return response()->json([
                'success' => true,
                'message' => "Data Jenis BBM",
                'data' => $type
            ],200);
        }else {
            return response()->json([
                'success' => false,
                'message' => "Data not found",
            ],200);
        }
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name' => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $type = Type::create($data);
        return response()->json([
            'success' => true,
            'message' => "Data Type BBM Created",
            'data' => $type
        ],200);
    }
}
