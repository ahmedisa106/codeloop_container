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
            'username' => 'Ahmed',
            'email' => 'company1@app.com',
            'password' => 123456,
            'phone' => 123456789,
            'commercial_number' => 123456789,
            'tax_card_number' => 132456789,

        ]);

        \App\Models\Company::create([
            'name' => 'Company 2',
            'username' => 'Ahmed',
            'email' => 'company2@app.com',
            'password' => 123456,
            'phone' => 123456789,
            'commercial_number' => 123456789,
            'tax_card_number' => 132456789,

        ]);
    }
}
