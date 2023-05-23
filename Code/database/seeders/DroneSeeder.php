<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Drone;
class DroneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drones = [
            [
                "name" => "G4-D01",
                "type" => "Sensing",
                "battery" => 80,
                "payload-capacity" => 100,
                "user_id" => 1
            ],
            [
                "name" => "G4-D02",
                "type" => "Maping",
                "battery" => 90,
                "payload-capacity" => 100,
                "user_id" => 2
            ],
            [
                "name" => "G4-D03",
                "type" => "Maping",
                "battery" => 100,
                "payload-capacity" => 100,
                "user_id" => 3
            ],
        ];
        foreach ($drones as $drone) {
            Drone::create($drone);
        }
    }
}
