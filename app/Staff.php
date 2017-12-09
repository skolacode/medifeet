<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [

		'name', 'email', 'mobile_number', 'address'
	];


    /* Get all the items */
    public function scopeGetItems()
    {

        $allItems = Item::get();

        return $allItems;
    }
}
