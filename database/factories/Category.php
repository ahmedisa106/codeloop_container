<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $id = collect(\App\Models\Company::get())->random()->id;
    return [
        'name' => $faker->randomElement(['أنقاض', 'نفايات']),
        'unit' => $faker->randomElement(['يارده', 'قدم']),
        'company_id' => $id,
    ];
});
