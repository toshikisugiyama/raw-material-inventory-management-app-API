<?php

namespace App\Listeners;

use App\Events\InventorySaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class saveTotalMaterial
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  InventorySaved  $event
     * @return void
     */
    public function handle(InventorySaved $event)
    {
        // 親データ
        $material = \App\Material::find($event->inventory->material_id);
        // 保存したデータの親IDをもつデータ全て
        $inventories = \App\Inventory::where('material_id', $event->inventory->material_id)->pluck('stock_quantity');
        $material->total = array_sum($inventories->all());
        $material->save();
    }
}
