<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [

		'article_number', 'name', 'size', 'price', 'color', 'stock'
	];


    /**
     * Get the post that owns the comment.
     */
    public function bookings()
    {
        return $this->hasMany('App\Booking');
    }

    /* Get all the items */
    public function scopeGetItems()
    {

        $allItems = Item::get();

        return $allItems;
    }
}
