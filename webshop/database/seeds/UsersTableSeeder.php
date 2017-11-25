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
            'user_name' => 'Admin',
            'last_name' => 'Admin',
            'first_name' => 'Admin',
            'email' => 'admin@localhost.com',
            'status'=>'confirmed',
            'password' => bcrypt('secret'),
        ]);
    }
}
