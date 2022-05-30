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
        \App\Models\Company::create([
            'name' => 'Company 1',
            'username' => 'Company 1',
            'email' => 'company1@app.com',
            'password' => bcrypt(123456),
            'phone' => 456789,
            'commercial_number' => 456789,
            'tax_card_number' => 456789,

        ]);

        \App\Models\Company::create([
            'name' => 'Company 2',
            'username' => 'Company 2',
            'email' => 'company2@app.com',
            'password' => bcrypt(123456),
            'phone' => 123456,
            'commercial_number' => 123456,
            'tax_card_number' => 123456,

        ]);
    }
}
