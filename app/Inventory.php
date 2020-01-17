<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /**
     * モデルのイベントマップ
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'saved' => Events\InventorySaved::class,
    ];

    protected $gurded = [];

    public function materials()
    {
        return $this->belongsTo('Material');
    }
}
