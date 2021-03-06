<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [

		'name', 'email', 'mobile_number', 'address'
	];


    /* Get all the users */
    public function scopeGetUsers()
    {

        $allUsers = User::get();

        return $allUsers;
    }
}
