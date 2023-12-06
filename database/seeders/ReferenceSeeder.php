<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('references')->insert([
            [
                'name' => 'Express Learning Online',
            ],
            [
                'name' => 'Centro Educativo Integral Delta',
            ],
            [
                'name' => 'Cortés Guerrero Luis Fernando',
            ],
            [
                'name' => 'No aplica',
            ]
        ]);
    }
}
