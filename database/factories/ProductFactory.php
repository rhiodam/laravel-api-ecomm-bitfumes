<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Category;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'categories_id' => function () {
            return Category::all()->random();
        },
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(10000, 100000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2, 30),


    ];
});
