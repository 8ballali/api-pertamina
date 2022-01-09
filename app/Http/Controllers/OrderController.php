<?php

namespace App\Http\Controllers;

use App\Models\AssignOrder;
use App\Models\Order;
use App\Models\Spbu;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public $order_id;
    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }
    public function index()
    {
        $order_detail = Order::find($this->order_id);
        $order = Order::all();
        $spbu = Spbu::all();
        return view('admin.list-order', compact('order','spbu'));
    }
}
