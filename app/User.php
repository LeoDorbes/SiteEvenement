<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The boot function used to generate actions when the Model is called :
     *
     * @function boot
     */
    public static function boot()
    {
        User::creating(function ($user) {
            $user->password = Hash::make($user->password);
        });

    }
}
