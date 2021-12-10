<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Detail_Pengisian;
use App\Models\Isi_Tank;
use App\Models\Pengisian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengisianController extends Controller
{
    public function index(Request $request)
    {
        $pengisian = Pengisian::with('user')->with('pertamina')->with('tank')
        ->when(($request->get('user_id')), function ($query) use ($request)
        {
            $query->where('user_id', $request->get('user_id'));
        })->when(($request->get('pertamina_id')), function ($query) use ($request)
        {
            $query->where('pertamina_id', $request->get('pertamina_id'));
        })
        ->get();
        if ($pengisian->isNotEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Data Pengisian',
                'data' => $pengisian
            ],200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'Data Not Found',
                'data' => []
            ],200);
        }

    }
    public function show($id)
    {
        $pengisian = Pengisian::find($id);
        if ($pengisian) {
            return response()->json([
                'success' =>true,
                'message' => 'Data pengisian',
                'data' => $pengisian
            ],200);
        }else {
            return response()->json([
                'success' =>false,
                'message' => 'Data Not Found'
            ],200);
        }
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'user_id' => 'required',
            'pertamina_id' => 'required',
            'tank_id' => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $pengisian = Pengisian::create($data);

            foreach ($request->type as $type) {
                Detail_Pengisian::create([
                    'pengisian_id' => $pengisian->id,
                    'type_id' => $type['type_id'],
                    'value' => $type['value'],
                ]);

            }
            return response()->json([
                'success' => true,
                'message' => 'Data Pengisian Created',
                'data' => $pengisian
            ],200);
    }
    public function update(Request $request,$id)
    {
        $data = $request->all();
        $pengisian = Pengisian::find($id);
        $rules = [
            'user_id'          => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $pengisian->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Updated',
            'data' => $pengisian
        ],200);
    }
    public function delete($id)
    {
        $pengisian = Pengisian::find($id);
        $pengisian->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Deleted'
        ],200);
    }
}
