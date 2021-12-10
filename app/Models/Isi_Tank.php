<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isi_Tank extends Model
{
    protected $table = "isi_tanks";
    protected $fillable = ['tank_id', 'type_id', 'value', 'status', 'nomor_tank'];
    use HasFactory;

    public function tank()
    {
        return $this->belongsTo(Tank::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
