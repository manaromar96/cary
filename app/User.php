<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','avatar','phone','store_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function store(){
        return $this->hasOne(Store::class);
    }

    public function role(){
        return $this->hasOne(Role::class);
    }
    public function stores(){
        return $this->hasMany(Store::class);
    }
    public function cars(){
        return $this->hasMany(Car::class);
    }
    public function sales(){
        return $this->hasMany(Sale::class);
    }

}
