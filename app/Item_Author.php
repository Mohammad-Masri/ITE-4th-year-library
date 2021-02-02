<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_Author extends Model
{
    protected $table = 'item_authors';

    public function getItem()
    {
        return $this->belongsTo('App\Item');
    }

}
