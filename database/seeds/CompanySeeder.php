<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Company::class, 1)->create()->each(function ($company) {
            $company->attachRole('admin');
        });
    }
}
