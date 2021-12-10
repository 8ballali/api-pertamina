<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pengisian extends Model
{
    protected $table = "detail_pengisians";
    protected $fillable = ['pengisian_id', 'type_id', 'value'];
    use HasFactory;

    public function pengisian()
    {
        return $this->belongsTo(Pengisian::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
