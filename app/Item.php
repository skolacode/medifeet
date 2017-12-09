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

		'article_number', 'size', 'price', 'color', 'stock'
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

    /* Get item size in drop down base on article Number */
    public static function itemsDropDown($article_number, $type)
    {

        $result = Item::where('article_number', $article_number)->pluck($type, 'id');

        return $result; 
    }
}
