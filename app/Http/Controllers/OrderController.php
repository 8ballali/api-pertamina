<?php

namespace App\Http\Controllers;

use App\Models\AssignOrder;
use App\Models\Order;
use App\Models\Spbu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index()
    {
        $order = Order::orderBy('created_at', 'desc')->get();
        $spbu = Spbu::all();
        $user = Auth::user();
        return view('admin.list-order', compact('order','spbu','user'));
    }
}
