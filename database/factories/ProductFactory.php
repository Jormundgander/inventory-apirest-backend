<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'barcode' => $faker->unique()->numberBetween($min = 1000, $max = 5000),
        'img_path' => $faker->sentence(2),
        'name' => $faker->sentence(2),
        'description' => $faker->sentence(2)
    ];
});
