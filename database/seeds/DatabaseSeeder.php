<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LaratrustSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(PackageSeeder::class);
        $this->call(AppSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(CategorySeeder::class);
        // $this->call(ContainerSeeder::class);
        //$this->call(CategorySizeSeeder::class);
    }
}
