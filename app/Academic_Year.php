<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Academic_Year extends Model
{
    protected $table = 'academic_years';


    public function getSubjects()
    {
        return $this->hasMany('App\Subject','academic_year_id');
    }

}
