<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MaterialsTableSeeder extends Seeder
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
                'name' => '砂糖',
                'control_code' => '00000001',
                'supplier' => 'A社',
                'unit' => 'kg',
            ],
            [
                'name' => '塩',
                'control_code' => '00000002',
                'supplier' => 'Bコーポレーション',
                'unit' => 'kg',
            ],
            [
                'name' => '醤油',
                'control_code' => '12345678',
                'supplier' => 'C商店',
                'unit' => 'L',
            ],
        ];
        foreach ($items as $item) {
            $material = new \App\Material();
            $material->name = $item['name'];
            $material->control_code = $item['control_code'];
            $material->supplier = $item['supplier'];
            $material->unit = $item['unit'];
            $material->material_comment = Str::random(400);
            $material->created_at = Carbon::now();
            $material->updated_at = Carbon::now();
            $material->save();
        }
    }
}
