<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'is_admin' => true,
            'password' => Hash::make('admin'),
            'email' => 'admin@email.com',
            'profile_photo_path' => 'https://ui-avatars.com/api/?name=Admin&color=7F9CF5&background=EBF4FF'
        ]);
    }
}
