<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        //'id' => range(1,20),
        'title'=> $faker->sentence,
        'body' => $faker->paragraph,
        'category_id' => rand(1,5),
        //
    ];
});
