<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'regynald.zambrano@gmail.com'],
            [
                'name' => 'Regynald Zambrano',
                'password' => null,
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );
    }
}
