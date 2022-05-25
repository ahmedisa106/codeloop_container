<?php

use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Package::create([
            'title' => 'package 1',
            'period' => 3,
            'price' => 1500,

        ]);

        \App\Models\Package::create([
            'title' => 'package 2',
            'period' => 4,
            'price' => 2000,

        ]);
    }
}
