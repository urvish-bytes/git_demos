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
        \DB::table('users')->insert([[
                'name' => 'A',
                'email' => 'apple@gmail.com',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'S',
                'email' => 'samsung@gmail.com',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'V',
                'email' => 'vivo@gmail.com',
                'password' => bcrypt('12345')
            ]]);
    }
}
