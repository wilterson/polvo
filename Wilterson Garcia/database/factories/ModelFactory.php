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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Product;
use App\Entities\User;

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Product::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->firstNameFemale,
        'sku' => $faker->ipv4,
        'category' => $faker->randomElement(array ('roupas','calcados','acessorios')),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 200, $max = 5000),
        'description' => $faker->sentence(6),
        'image' => $faker->imageUrl(800, 600, 'fashion'),
    ];
});
