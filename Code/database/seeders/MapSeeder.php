<?php

namespace Database\Seeders;

use App\Models\Map;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maps = [
            [
                'name' => 'Farm A',
                'image_url' => 'https://example.com/farm-a.jpg',
                'farm_id' => 1,
                'drone_id' => 1,
                'location_id' => 1,
            ],
            [
                'name' => 'Farm B',
                'image_url' => 'https://example.com/farm-b.jpg',
                'farm_id' => 2,
                'drone_id' => 2,
                'location_id' => 2,
            ],
            [
                'name' => 'Farm C',
                'image_url' => 'https://example.com/farm-c.jpg',
                'farm_id' => 3,
                'drone_id' => 3,
                'location_id' => 3,
            ],
        ];
        foreach ($maps as $map) {
            Map::create($map);
        }
    }
}
