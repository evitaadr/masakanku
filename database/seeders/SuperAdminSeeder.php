<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email_user' => 'admin@example.com'],
            [
                'username_user' => 'SuperAdmin',
                'password_user' => 'supersecurepassword', // Ini akan otomatis di-hash lewat mutator
            ]
        );
    }
}
