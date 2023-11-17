<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            try {
                $admin = User::create([
                    'name'              => 'Admin',
                    'email'             => 'admin@gmail.com',
                    'email_verified_at' => now(),
                    'password'          => Hash::make('password'),
                ]);
                $admin->assignRole('Administrator');
            } catch (\Throwable $e) {
                throw $e;
            }
        });
    }
}
