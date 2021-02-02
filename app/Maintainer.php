<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintainer extends Model
{
    protected $table = 'maintainers';

    public function getItems()
    {
        return $this->hasMany('App\Item','maintainer_id');
    }

}
