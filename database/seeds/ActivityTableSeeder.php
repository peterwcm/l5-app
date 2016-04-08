<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class ActivityTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key check for this connection.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Delete all records.
        DB::table('activities')->delete();
        // Reset AUTO_INCREMENT.
        DB::table('activities')->truncate();

        App\Models\Activity::create([
            'title' => 'Social Badminton Game',
            'description' => 'Social badminton game on this friday.',
        ]);

        // Dummy activities.
        TestDummy::times(10)->create('App\Models\Activity');
    }
}
