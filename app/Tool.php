<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $table = 'tools';

    public function getProject_Tools()
    {
        return $this->hasMany('App\Project_Tool','tool_id');
    }

}
