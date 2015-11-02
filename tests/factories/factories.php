<?php

$factory('App\Models\User', [
    'email' => $faker->unique()->email,
    'password' => '$2y$10$t6q81nz.XrMrh20NHDvxUu/szwHBwgzPd.01e8uuP0qVy0mPa6H/e',
    'first_name' => $faker->firstName,
    'last_name' => $faker->lastName,
    'username' => $faker->unique()->userName,
    'is_email_verified' => 1,
]);

$factory('App\Models\Activity', [
    'title' => $faker->sentence($nbWords = 7),
    'description' => $faker->paragraph($nbSentences = 5),
]);
