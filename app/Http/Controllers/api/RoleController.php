<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function index()
    {
        $role = Roles::get();
        return response()->json([
            'success' => true,
            'message' => 'Data Role',
            'data' => $role
        ],200);
    }

    public function show($id)
    {
        $role = Roles::find($id);
        if ($role) {
            return response()->json([
                'success' => true,
                'message' => 'Data Role',
                'data' => $role
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
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $role = Roles::create($data);
        return response()->json([
            'success' => true,
            'message' => "Data Roles Created",
            'data' => $role
        ],200);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $role = Roles::find($id);
        $rules = [
            'name'          => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $role->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Roles Updated',
            'data' => $role
        ],200);
    }

    public function delete($id)
    {
        $role = Roles::find($id);
        $role->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Role Deleted',
        ],200);
    }
}
