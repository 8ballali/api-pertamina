<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = ['spbu_id', 'status'];
    use HasFactory;

    protected $appends = [
        'spbu',
        'detail_order'
    ];

    public function getSpbuAttribute(){
        return $this->spbu()->get();
    }

    public function getDetailOrderAttribute()
    {
        return $this->detail_order()->get();
    }
    public function spbu()
    {
        return $this->belongsTo(Spbu::class,'spbu_id');
    }
    public function detail_order()
    {
        return $this->hasMany(Detail_Order::class,'order_id','id');
    }
    public function type()
    {
        return $this->hasOne(Type::class,'order_id','id');
    }

    public function assign_order()
    {
        return $this->hasOne(AssignOrder::class,'order_id','id');
    }
}
