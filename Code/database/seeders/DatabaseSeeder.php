<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Instruction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(FarmSeeder::class);
        $this->call(DroneSeeder::class);
        $this->call(MapSeeder::class);
        $this->call(InstructionSeeder::class);
       
    }
}
