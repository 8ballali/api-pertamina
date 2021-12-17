<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Detail_Order;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {
        $order = Detail_Order::with('order')->with('type')->get();
        return response()->json([
            'success' => true,
            'message' => 'Data Order',
            'data' => $order
        ],200);
    }

    public function show($id)
    {
        $order = Order::find($id);
        if ($order) {
            return response()->json([
                'success' => true,
                'message' => 'Data Order',
                'data' => $order
            ],200);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'Data Order Found'
            ],200);
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'spbu_id' => 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 200);
        }
        $order = Order::create($data);
            foreach ($request->type as $type) {
                Detail_Order::create([
                    'order_id' => $order->id,
                    'type_id' => $type['type_id'],
                    'value' => $type['value'],
                ]);
            }
            return response()->json([
                'success' => true,
                'message' => 'Data Order Created',
                'data' => $order
            ],200);
    }
    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Order Deleted',
        ],200);
    }
}
