<?php

namespace App\Http\Controllers;

use App\Models\Detail_Order;
use App\Models\Order;
use App\Models\Spbu;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderDetailController extends Controller
{


    public function index($order_id)
    {
        $order = Order::all();
        $detail_order = Detail_Order::where('order_id', $order_id)->get() ;
        $spbu = Spbu::all();
        $type = Type::all();
        $user = Auth::user();
        return view('admin.detail-order', compact('detail_order', 'spbu', 'order', 'type', 'user'));
    }
}
