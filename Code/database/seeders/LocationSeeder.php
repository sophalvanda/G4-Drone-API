<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'latitude' => 40.7128,
                'longitude' => 74.0060,
            ],
            [
                'latitude' => 51.5074,
                'longitude' => 0.1278,
            ],
            [
                'latitude' => 33.8688,
                'longitude' => 151.2093,
            ],
        ];
        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
