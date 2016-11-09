<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['email'];

    /*
     * 用toArray()時會不見
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verification()
    {
        return $this->hasOne('App\Models\Verification');
    }
}
