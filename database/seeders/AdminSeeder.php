<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('role_name', 'Admin')->first();

        if (!$admin) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make(12345678),
                'real_password' => 12345678,
                'role_name' => 'Admin',
                'email_verified_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
