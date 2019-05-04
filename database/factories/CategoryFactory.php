<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'detail' => $faker->sentence,
        'code' => $faker->numerify('C0###') // 'C0 609'
    ];
});
