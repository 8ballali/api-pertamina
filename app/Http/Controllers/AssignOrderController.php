<?php

namespace App\Http\Controllers;

use App\Models\AssignOrder;
use App\Models\Order;
use App\Models\Spbu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignOrderController extends Controller
{
    public function index()
    {
        $assign_order = AssignOrder::get();
        $user = User::get();
        $order = Order::get();
        $spbu = Spbu::get();
        $user = Auth::user();
        return view('admin.list-assign-order', compact('assign_order', 'user', 'order', 'spbu', 'user'));
    }
    public function add()
    {
        $user = User::where('role_id', '2')->get();
        $order = Order::where('status', 'PENDING')->get();
        $spbu = Spbu::get();
        $user_loggedin = Auth::user();
        return view('admin.create-assign-order', compact('user', 'order','spbu', 'user', 'user_loggedin'));
    }
    public function store(Request $request)
    {

        AssignOrder::create([
            'order_id' => $request->order_id,
            'user_id' => $request->user_id
        ]);

        return redirect('/pertamina/list-assign-order');

    }
}
