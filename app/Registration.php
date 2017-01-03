<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


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

        Registration::creating(function ($registration) {
            $registration->validate = 0;
        });
    }

    public function requestFill(Request $request){

        $this->first_name = $request->input('first_name');
        $this->last_name = $request->input('last_name');
        $this->email = $request->input('email');
        $this->address = $request->input('address');
        $this->city = $request->input('city');
        $this->postal_code = $request->input('postal_code');
        $this->role_id = $request->input('role_id');
        $this->gender = $request->input('gender');
        $this->participate = $request->input('participate') ? true : false;
        $this->comment = $request->input('comment');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }


}
