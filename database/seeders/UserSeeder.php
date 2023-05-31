<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $alumni = User::create([
            'name' => 'alumni',
            'email' => 'alumni@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $alumni->assignRole('alumni');

        $perusahaan = User::create([
            'name' => 'perusahaan',
            'email' => 'perusahaan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        $perusahaan->assignRole('perusahaan');
    }
}
