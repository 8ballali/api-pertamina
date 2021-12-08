<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pengeluaran extends Model
{
    protected $table = "detail_pengeluarans";
    protected $fillable = ['pengeluaran_id', 'type_id', 'value'];
    use HasFactory;
}
