<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'admin@mail.org',
            'email_verified_at' => now(),
            'username' => 'admin',
            'password' => Hash::make('secret'),
            'remember_token' => Str::random(10),
        ]);
    }
}
