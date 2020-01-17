<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $gurded = [];

    public function inventories()
    {
        return $this->hasMany('App\Inventory');
    }
}
