<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Detail_Pengeluaran;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengeluaranController extends Controller
{
    public function index(Request $request)
    {
        $pengeluarans = Pengeluaran::with('user')->with('spbu')->with('tank')
        ->when(($request->get('user_id')), function ($query) use ($request)
        {
            $query->where('user_id', $request->get('user_id'));
        })->when(($request->get('spbu_id')), function ($query) use ($request)
        {
            $query->where('spbu_id', $request->get('spbu_id'));
        })
        ->get();
        if ($pengeluarans->isNotEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Data Pengisian',
                'data' => $pengeluarans
            ],200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'Data Not Found'
            ],200);
        }
    }
    public function show($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        if ($pengeluaran) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Pengeluaran',
                'data' => $pengeluaran
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
            'user_id' => 'required',
            'spbu_id' => 'required',
            'tank_id' => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $pengeluaran = Pengeluaran::create($data);

            foreach ($request->type as $type) {
                Detail_Pengeluaran::create([
                    'pengeluaran_id' => $pengeluaran->id,
                    'type_id' => $type['type_id'],
                    'value' => $type['value'],
                ]);

            }
            return response()->json([
                'success' => true,
                'message' => 'Data Pengisian Created',
                'data' => $pengeluaran
            ],200);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $pengeluaran = Pengeluaran::find($id);
        $rules = [
            'user_id'          => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $pengeluaran->update($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Updated',
            'data' => $pengeluaran
        ],200);
    }
    public function delete($id)
    {
        $pengeluaran = Pengeluaran::find($id);
        $pengeluaran->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Deleted',
        ],200);
    }
}
