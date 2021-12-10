<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengisian extends Model
{
    protected $table = "pengisians";
    protected $fillable = ['user_id', 'pertamina_id', 'tank_id'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pertamina()
    {
        return $this->belongsTo(Pertamina::class);
    }
    public function tank()
    {
        return $this->belongsTo(Tank::class);
    }
    public function detail_pengisian()
    {
        return $this->hasOne(Detail_Pengisian::class,'pengisian_id','id');
    }
}
