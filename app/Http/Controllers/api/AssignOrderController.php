<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\AssignOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssignOrderController extends Controller
{
    public function index(Request $request)
    {
        $assign = AssignOrder::when(($request->get('user_id')), function ($query) use ($request)
        {
            $query->where('user_id', $request->user_id);
        })->with('order')->with('user')
        ->get();
        if ($assign->isNotEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Data Assign Order',
                'data' => $assign
            ],200);
        }else {
            return response()->json([
                'success' => true,
                'message' => 'Data Not Found',
                'data' => []
            ],200);
        }
    }

    public function show($id)
    {
        $assign = AssignOrder::find($id);
        if ($assign) {
            return response()->json([
                'success' => true,
                'message' => 'Data Assign Order',
                'data' => $assign
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
            'order_id' => 'required',
            'user_id' => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $assign = AssignOrder::create($data);
        return response()->json([
            'success' => true,
            'message' => 'Assign Order success',
            'data' => $assign
        ],200);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $assign = AssignOrder::find($id);
        $rules = [
            'user_id'          => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $assign->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Updated',
            'data' => $assign
        ],200);
    }
}
