<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil company pertama sebagai default current_company_id
        $defaultCompany = Company::first();

        if (! $defaultCompany) {
            $this->command->error('Tidak ada company! Jalankan CompanySeeder terlebih dahulu.');
            return;
        }

        $users = [
            [
                'name' => 'Mikeu Dev',
                'email' => 'mikeu@test.com',
                'username' => 'mikeudev',
                'password' => env('DEF_SUPERADMIN'),
                'role' => 'Super Admin',
            ],
            [
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'username' => 'admin',
                'password' => env('DEF_ADMIN'),
                'role' => 'Administrator',
            ],
            [
                'name' => 'Developer',
                'email' => 'developer@example.com',
                'username' => 'developer',
                'password' => env('DEF_DEV'),
                'role' => 'Developer',
            ],
            [
                'name' => 'Finance',
                'email' => 'finance@example.com',
                'username' => 'finance',
                'password' => env('DEF_FINANCE'),
                'role' => 'Finance',
            ],
            [
                'name' => 'Internship',
                'email' => 'intern@example.com',
                'username' => 'intern',
                'password' => env('DEF_INTERN'),
                'role' => 'Internship',
            ],
        ];

        foreach ($users as $data) {

            // Buat user jika belum ada
            $user = User::firstOrCreate(
                [
                    'email' => $data['email'],
                    'username' => $data['username'],
                ],
                [
                    'name' => $data['name'],
                    'email_verified_at' => now(),
                    'password' => Hash::make($data['password']),
                    'current_company_id' => $defaultCompany->id, // wajib ada
                ]
            );

            // Pastikan user terdaftar di pivot company_user
            $user->companies()->syncWithoutDetaching([$defaultCompany->id]);

            // Assign role
            $user->assignRole($data['role']);
        }
    }
}
