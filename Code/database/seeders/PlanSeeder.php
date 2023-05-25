<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Plan A',
                'type' => 'Wheat',
                'description' => 'A field of wheat',
                'datetime' => '2022-01-01 12:00:00',
                'area' => 'Area A',
                'user_id' => 1,
            ],
            [
                'name' => 'Plan B',
                'type' => 'Rice',
                'description' => 'A paddy field of rice',
                'datetime' => '2022-02-01 12:00:00',
                'area' => 'Area B',
                'user_id' => 2,
            ],
            [
                'name' => 'Plan C',
                'type' => 'Corn',
                'description' => 'A field ofcorn',
                'datetime' => '2022-03-01 12:00:00',
                'area' => 'Area C',
                'user_id' => 3,
            ],
        ];
        foreach ($plans as $plan) {
            Plan::create($plan);
        };
        
    }
}
