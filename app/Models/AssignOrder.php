<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignOrder extends Model
{
    protected $table = "assign_orders";
    protected $fillable = ['order_id','user_id'];
    use HasFactory;

    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
