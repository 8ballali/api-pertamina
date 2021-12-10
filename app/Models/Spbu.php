<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spbu extends Model
{
    protected $table = "spbus";
    protected $fillable = ['name', 'address', 'code', 'region_id'];
    use HasFactory;

    public function region()
    {
        return $this->hasOne(Region::class,'id','region_id');
    }
}
