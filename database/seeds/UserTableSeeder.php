<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \FRD\Entities\User::truncate();

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Webmaster',
            'email' => 'pc@fordelone.com.br',
            'password' => bcrypt('fiesta1556'),
            'remember_token' => str_random(10),
            'role' => 'admin'
        ]);

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Sergio',
            'email' => 'sergio@centerweb.com.br',
            'password' => bcrypt('H8KmHZs1'),
            'remember_token' => str_random(10),
            'role' => 'admin'
        ]);
    }
}
