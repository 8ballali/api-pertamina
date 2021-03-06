<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    protected $table = "tanks";
    protected $fillable = ['name', 'mac','plat', 'total_container', 'capacity'];
    use HasFactory;

    public function isi_tank()
    {
        return $this->hasMany(Isi_Tank::class,'tank_id','id');
    }

    public function pengisian()
    {
        return $this->hasOne(Pengisian::class,'tank_id','id');
    }
}
