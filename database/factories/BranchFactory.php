<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Branch;
use Faker\Generator as Faker;

$factory->define(Branch::class, function (Faker $faker) {

    $id = collect(\App\Models\Company::get())->random()->id;
    return [
        'name' => $faker->name,
        'desc' => $faker->sentence(2),
        'address' => $faker->address,
        'company_id' => $id,
    ];
});
