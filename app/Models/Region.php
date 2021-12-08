<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = "regions";
    protected $fillable = ['name'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'region_id');
    }
    public function pertamina()
    {
        return $this->belongsTo(Pertamina::class,'region_id');
    }
    public function spbu()
    {
        return $this->belongsTo(Spbu::class,'region_id');
    }
}
