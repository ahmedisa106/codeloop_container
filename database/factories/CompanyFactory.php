<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'status' => $faker->randomElement(['active']),
        'name' => $faker->name,
        'username' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt('123456'),
        'phone' => $faker->randomElement([123456]),
        'commercial_number' => $faker->randomNumber(),
        'tax_card_number' => $faker->randomNumber(),
        'logo' => '',

    ];
});



