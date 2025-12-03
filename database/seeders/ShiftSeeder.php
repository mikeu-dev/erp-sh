<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Non Shift',
                'enhancer' => 1,
            ],
            [
                'name' => 'Part Time',
                'enhancer' => 1,
            ],
            [
                'name' => 'Internship',
                'enhancer' => 1,
            ],
        ];

        foreach ($data as $d)
        {
            Shift::create([
                'name' => $d['name'],
                'name' => $d['enhancer'],
            ]); 
        }
    }
}
