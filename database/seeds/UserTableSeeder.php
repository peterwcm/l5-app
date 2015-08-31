<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key check for this connection.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Delete all records.
        DB::table('users')->delete();
        // Reset AUTO_INCREMENT.
        DB::table('users')->truncate();

        // Dev user.
        App\Models\User::create([
            'email' => 'peterwong.brisbane@gmail.com',
            'password' => '$2y$10$t6q81nz.XrMrh20NHDvxUu/szwHBwgzPd.01e8uuP0qVy0mPa6H/e',
            'first_name' => 'L5',
            'last_name' => 'App',
            'username' => 'l5-app',
            'is_email_verified' => 1,
        ]);

        // Dummy users.
        TestDummy::times(10)->create('App\Models\User');
    }
}
