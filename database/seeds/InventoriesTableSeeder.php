<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Provider\DateTime;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'material_id' => 1,
                'dead' => DateTime::dateTimeThisDecade(),
            ],
            [
                'material_id' => 1,
                'dead' => Carbon::now()->addMonthNoOverflow()->toDateString(),
            ],
            [
                'material_id' => 1,
                'dead' => Carbon::now()->addMonthNoOverflow(6)->toDateString(),
            ],
            [
                'material_id' => 2,
                'dead' => Carbon::now()->addMonthNoOverflow(12)->toDateString(),
            ],
            [
                'material_id' => 3,
                'dead' => Carbon::now()->addMonthNoOverflow()->toDateString(),
            ],
        ];
        foreach ($items as $item) {
            $inventory = new \App\Inventory();
            $inventory->material_id = $item['material_id'];
            $inventory->lot_code = Str::random(10);
            $inventory->dead = $item['dead'];
            $inventory->stock_quantity = rand();
            $inventory->inventory_comment = Str::random(400);
            $inventory->status = rand(0,2);
            $inventory->created_at = Carbon::now();
            $inventory->updated_at = Carbon::now();
            $inventory->save();
        }
    }
}
