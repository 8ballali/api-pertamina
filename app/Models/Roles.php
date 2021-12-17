<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = "roles";
    protected $fillable = ['name'];
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,'role_id');
    }

}
