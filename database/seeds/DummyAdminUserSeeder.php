<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummyAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@larabook.test',
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);

        $user->assignRole('admin');
    }
}
