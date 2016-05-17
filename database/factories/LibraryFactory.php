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


$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName
    ];
});

$factory->define(App\Publisher::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'founded' => $faker->year
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'desc' => $faker->text,
        'isbn' => $faker->isbn13,
        'image_path' => $faker->imageUrl(300, 400, 'nature'),
        'stock' => $faker->randomDigit,
        'author_id' => App\Author::orderByRaw("RAND()")->first()->id,
        'publisher_id' => App\Publisher::orderByRaw("RAND()")->first()->id,
        'country_id' => App\Country::orderByRaw("RAND()")->first()->id,
        'year' => $faker->year
    ];
});

$factory->define(App\IssuedLogs::class, function (Faker\Generator $faker) {
    return [
        'book_id' => App\Book::orderByRaw("RAND()")->first()->id,
        'user_id' => App\User::orderByRaw("RAND()")->first()->id,
        'issued_at' => $faker->dateTimeThisMonth,
        'return_time' => $faker->dateTimeBetween('+1 day', '+1 month')
    ];
});