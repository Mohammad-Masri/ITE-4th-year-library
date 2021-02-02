<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Subject extends Model
{
    protected $table = 'subjects';

    public function getSpecialize()
    {
        return $this->belongsTo('App\Specialize');
    }

    public function getAcademic_Year()
    {
        return $this->belongsTo('App\Academic_Year');
    }



    public function getItems()
    {
        return $this->hasMany('App\Item','subject_id');
    }

}
