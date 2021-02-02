<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Specialize extends Model
{
    protected $table = 'specializes';

    public function getSubjects()
    {
        return $this->hasMany('App\Subject','specialize_id');
    }
}
