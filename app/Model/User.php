<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'firstname','lastname','usernamme','phone', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proerties()
    {
        return $this->hasMany(Property::class,'id','user_id');
    }    
}
