<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'avatar',
        'region_id',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $appends = [
        'avatar_url',
        'region',
        'role'
    ];

    public function getAvatarUrlAttribute(){
        return url('storage/'. $this->avatar);
    }

    public function getRegionAttribute()
    {
        return $this->region()->get();
    }

    public function getRoleAttribute()
    {
        return $this->roles()->get();
    }

    public function region()
    {
        return $this->hasOne(Region::class,'id', 'region_id');
    }

    public function pengisian()
    {
        return $this->hasMany(Pengisian::class,'user_id','id');
    }
    public function roles()
    {
        return $this->hasOne(Roles::class,'id','role_id');
    }

    public function assign_order()
    {
        return $this->hasOne(AssignOrder::class,'user_id','id');
    }
}
