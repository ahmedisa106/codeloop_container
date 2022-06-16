<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CategorySize;
use Faker\Generator as Faker;

$factory->define(CategorySize::class, function (Faker $faker) {
    $id = collect(\App\Models\Company::get())->random()->id;
    return [
        'size' => $faker->randomNumber(),
        'company_id' => $id,
    ];
});
