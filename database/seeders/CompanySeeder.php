<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name'    => 'PT Maju Sejahtera',
            'code'    => 'MSJ',
            'tax'     => '21.123.456.7-890.000',
            'tagline' => 'Melayani Dengan Integritas',
            'director' => 'Budi Santoso',
            'email'   => 'info@maju-sejahtera.com',
            'phone'   => '021-1234567',
            'bank'    => 'BCA',
            'number'  => '1234567890',
            'address' => 'Jl. Merdeka No 10, Jakarta',
        ]);
    }
}
