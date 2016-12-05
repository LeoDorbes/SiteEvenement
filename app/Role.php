<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Role extends Model
{
    protected $table = "roles";
    protected $primaryKey = "id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    ];

    public static function getFormList()
    {
        $tab = [];
        $roles = Role::all();
        //$tab[null]= '';
        if (count($roles) > 0) {
            foreach ($roles as $role) {
                $tab[$role->id] = $role->name;
            }
        }
        return $tab;

    }

}
