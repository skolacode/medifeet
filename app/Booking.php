<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
