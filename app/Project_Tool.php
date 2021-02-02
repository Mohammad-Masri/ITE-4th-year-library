<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_Tool extends Model
{
    protected $table = 'project_tools';

    public function getItem()
    {
        return $this->belongsTo('App\Item');
    }

}
