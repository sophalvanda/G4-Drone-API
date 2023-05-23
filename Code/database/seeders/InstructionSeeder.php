<?php

namespace Database\Seeders;

use App\Models\Instruction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructions = [
            [ 
                'drone_id'=>1,
                'plan_id'=>1,
            ],
            [
                'drone_id'=>2,
                'plan_id'=>2,
            ],
            [
                'drone_id'=>3,
                'plan_id'=>3,
            ]
            
        ];
        foreach ($instructions as $instruction) {
            Instruction::create($instruction);
        }
    }
}
