<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Order extends Model
{
    protected $table = "order_details";
    protected $fillable = ['order_id', 'type_id', 'value'];
    use HasFactory;

    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
