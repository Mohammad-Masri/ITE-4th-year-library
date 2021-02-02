<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    protected $table = 'items';


    public function getSubject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function getItem_State()
    {
        return $this->belongsTo('App\Item_State');
    }

    public function getMaintainer()
    {
        return $this->belongsTo('App\Maintainer');
    }

    public function getItem_Type()
    {
        return $this->belongsTo('App\Item_Type');
    }

    public function getProject_Tools()
    {
        return $this->hasMany('App\Project_Tool','item_id');
    }

    public function getItem_Authors()
    {
        return $this->hasMany('App\Item_Author','item_id');
    }

    public function getBorrowes()
    {
        return $this->hasMany('App\Borrow','item_id');
    }



}
