<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\Task;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Task::class, function (Faker\Generator $faker) {
    $title = $faker->sentence;

    return [
        'title'       => $title,
        'description' => $faker->text,
        'slug'        => str_slug($title),
        'status'      => $faker->randomElement(Task::$statuses),
        'priority'    => $faker->randomElement(Task::$priorities),
        'by_user_id'  => 1
    ];
});

$factory->define(\App\Client::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->company,
        'description' => $faker->text,
        'logo'        => $faker->imageUrl(),
        'url'         => $faker->url,
    ];
});
