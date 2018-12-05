<?php

use Illuminate\Database\Seeder;
use premium\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('admin');
        $password2 = bcrypt('j2492218j');

        User::create([
            'name' => 'administrador',
            'email' => 'ejmgabriel97@gmail.com',
            'password' => $password2,
            'role_id' => 1
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => $password,
            'role_id' => 1
        ]);

        User::create([
            'name' => 'test',
            'email' => 'test@admin.com',
            'password' => 'test',
            'role_id' => 2
        ]);

        User::create([
            'name' => 'test2',
            'email' => 'test2@admin.com',
            'password' => 'test2',
            'role_id' => 3
        ]);

    }
}
