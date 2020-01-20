<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

     public function scopeNombre($query,$name){
        if($name)
            return $query->orWhere('name','LIKE',"%$name%");
    }


    public function scopeCorreo($query,$email){
        if($email)
            return $query->orWhere('email','LIKE',"%$email%");
    }

    public function scopeRol($query,$rol){
        if($rol)
            return $query->orWhere('name','LIKE',"%$rol%");
    }
}
