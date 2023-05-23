<?php

namespace Database\Seeders;

use App\Models\Farm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $farms = [
            [
                'name'=>'Farm1',
                'province'=>'BTB',
                'plan_id'=>1,
                'user_id'=>1,
            ],
            [
                'name'=>'Farm2',
                'province'=>'BMC',
                'plan_id'=>2,
                'user_id'=>2,
            ],
            [
                'name'=>'Farm3',
                'province'=>'BMC',
                'plan_id'=>3,
                'user_id'=>3,
            ]
            
        ];
        foreach ($farms as $farm) {
            Farm::create($farm);
        }
    }
}
