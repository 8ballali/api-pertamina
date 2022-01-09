<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Order extends Model
{
    protected $table = "order_details";
    protected $fillable = ['order_id', 'type_id', 'value'];
    use HasFactory;

    protected $appends = [
        'type'
    ];

    public function getTypeAttribute(){
        return $this->type()->get();
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
