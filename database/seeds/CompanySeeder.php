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
        $company = \App\Models\Company::create([
            'name' => 'Company 1',
            'username' => 'Company 1',
            'email' => 'company1@app.com',
            'status' => 'active',
            'password' => bcrypt(123456),
            'phone' => 456789,
            'commercial_number' => 456789,
            'tax_card_number' => 456789,

        ]);
        $company->attachRole('admin');


    }
}
