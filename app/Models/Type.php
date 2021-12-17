<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = "types";
    protected $fillable = ['name'];
    use HasFactory;

    public function isi_tank()
    {
        return $this->hasOne(Isi_Tank::class,'type_id','id');
    }
    public function detail_pengisian()
    {
        return $this->hasOne(Detail_Pengisian::class,'type_id','id');
    }
    public function detail_order()
    {
        return $this->hasOne(Detail_Order::class);
    }
}
