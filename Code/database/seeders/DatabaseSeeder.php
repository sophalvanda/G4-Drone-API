<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'user2@example.com',
            'password' => 'user2@example.com',
        ]);

        \App\Models\Drone::create([
            'name' => 'Drone 1',
            'type' => 'Quadcopter',
            'battery' => '3000mAh',
            'payload-capacity' => '500g',
            'user_id' => 1
        ]);

        \App\Models\Plan::create([
            'name' => 'Plan 1',
            'type' => 'Survey',
            'datetime' => '2023-06-01 09:00:00',
            'instruction' => 'Survey the farm fields',
            'area' => '100 acres',
            'user_id' => 1
        ]);

        \App\Models\DronePlane::create([
            'drone_id' => 1,
            'plan_id' => 1
        ]);

        \App\Models\Location::create([
            'city' => 'PP',
            'province' => 'BTB'
        ]);
        \App\Models\Farm::create([
            'name' => 'Waypoint 1',
            'latitude' => '49.2827',
            'longitude' => '-123.1207',
            'plan_id' => 1,
            'user_id' => 1
        ]);
        \App\Models\Map::create([
            'name' => 'Farm 1 Map',
            'image_url' => 'https://example.com/farm1-map.jpg',
            'farm_id' => 1,
            'drone_id' => 1,
            'location_id' => 1
        ]);
       
    }
}
