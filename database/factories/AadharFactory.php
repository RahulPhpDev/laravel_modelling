<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aadhar;
use Faker\Generator as Faker;

$factory->define(Aadhar::class, function (Faker $faker) {
    return [
        	'aadhar_number' => $faker->uuid(),
    ];
});
