<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'photo_id', 'password', 'role_id', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function isAdmin(){

        if($this->role->name == 'administrator'){
            return true;
        }
        return false;
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

//    public function isOwner(){
//        $post = Post::findOrfail($id);
//        if(!$this->isAdmin() &&  ){
//
//        }
//    }

}
