<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Registration extends Model
{
    protected $table = "registrations";
    protected $primaryKey = "id";

    //Validation : 0 = pending, 1 = accepted, 2 = refused

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    ];

    public static function boot()
    {
        User::creating(function ($registration) {
            $registration->validate = 0;
        });

    }


}
