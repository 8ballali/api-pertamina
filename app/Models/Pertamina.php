<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertamina extends Model
{
    protected $table = "pertaminas";
    protected $fillable = ['name', 'address', 'code', 'region_id'];
    use HasFactory;

    public function region()
    {
        return $this->hasOne(Region::class,'id','region_id');
    }
    public function pengisian()
    {
        return $this->hasOne(Pengisian::class,'pertamina_id','id');
    }
}
