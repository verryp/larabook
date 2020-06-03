<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    $randomNumber = rand(1, 100);
    $cover = "https://picsum.photos/id/{$randomNumber}/200/300";

    return [
        'name' => $faker->sentence(5),
        'description' => $faker->sentence(20),
        'quantity' => rand(1, 15),
        'cover' => $cover,
        'author_id' => Author::inRandomOrder()->first()->id,
    ];
});
