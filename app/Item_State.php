<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_State extends Model
{
    protected $table = 'item_states';

    public function getItems()
    {
        return $this->hasMany('App\Item','item_state_id');
    }

}
