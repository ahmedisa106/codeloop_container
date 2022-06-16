<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Category::class, 2)->create()->each(function ($category) {
            factory(\App\Models\CategorySize::class, 2)->create(['category_id' => $category->id]);
        });
    }
}
