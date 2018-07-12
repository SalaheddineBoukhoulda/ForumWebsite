<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'admin' => 1,
            'avatar' => 'avatars/user.png'
        ]);

        App\User::create([
            'name' => 'Salaheddine',
            'email' => 'fs_boukhoulda@esi.dz',
            'password' => bcrypt('Salaheddine31'),
            'avatar' => 'avatars/user.png'
        ]);
    }
}