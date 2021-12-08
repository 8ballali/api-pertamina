<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = "pengeluarans";
    protected $fillable = ['user_id', 'spbu_id', 'tank_id'];
    use HasFactory;
}
