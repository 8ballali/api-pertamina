<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengisian extends Model
{
    protected $table = "pengisians";
    protected $fillable = ['user_id', 'pertamina_id', 'tank_id'];
    use HasFactory;
}
