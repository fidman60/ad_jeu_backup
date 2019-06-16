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
        DB::table('users')->insert([
            'name' => 'Mohammed Ayman MOUFID',
            'email' => 'benghazimofid@gmail.com',
            'password' => bcrypt('fidman1235')
        ]);
    }
}
