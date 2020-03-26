<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Carbon\Carbon;
$factory->define(Article::class, function (Faker $faker) {
    return [
       'title' => $faker->word(),
       'content' => $faker->text(),
       // 'user_id' => App\User::inRandomOrder()->first()->id,
       'closed_at' => Carbon::today()->format('Y-m-d'),
    ];
});
