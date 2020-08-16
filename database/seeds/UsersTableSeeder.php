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
            'admin'    => 1,
            'name'     => 'Demo User',
            'email'    => 'demo@user.com',
            'password' => bcrypt('demo@123'),
        ]);
    }
}
