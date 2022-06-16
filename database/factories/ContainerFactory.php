<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Container;
use Faker\Generator as Faker;

$factory->define(Container::class, function (Faker $faker) {
    $company_id = collect(\App\Models\Company::get())->random()->id;
    $branch_id = collect(\App\Models\Branch::get())->random()->id;
    $category_id = collect(\App\Models\Category::get())->random()->id;
    $category_size_id = collect(\App\Models\CategorySize::get())->random()->id;

    return [
        'number' => $faker->randomNumber(),
        'company_id' => $company_id,
        'category_id' => $category_id,
        'category_size_id' => $category_size_id,
        'branch_id' => $branch_id,
        'price' => $faker->numberBetween(1000, 100000),
        'status' => 'available',
    ];
});
