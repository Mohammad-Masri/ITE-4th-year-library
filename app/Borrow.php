<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Borrow extends Model
{
    protected $table = 'borrows';

    public function getItem()
    {
        return $this->belongsTo('App\Item');
    }

    public function getUser()
    {
        return $this->belongsTo('App\User');
    }

    public function getBorrow_State()
    {
        return $this->belongsTo('App\Borrow_State');
    }



}
