<?php

use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\App::create([
            'model' => 'branches',
            'ar_model' => 'الفروع',
            'status' => 'active',
            'company_id' => 1
        ]);
        \App\Models\App::create([
            'model' => 'categories',
            'ar_model' => 'التصنيفات',
            'status' => 'active',
            'company_id' => 1
        ]);
        \App\Models\App::create([
            'model' => 'category-sizes',
            'ar_model' => 'أحجام التصنيفات',
            'status' => 'active',
            'company_id' => 1

        ]);
        \App\Models\App::create([
            'model' => 'rent-types',
            'ar_model' => 'أنواع الإيجار',
            'status' => 'active',
            'company_id' => 1

        ]);
        \App\Models\App::create([
            'model' => 'job-types',
            'ar_model' => 'أنواع الوظائف',
            'status' => 'active',
            'company_id' => 1

        ]);
        \App\Models\App::create([
            'model' => 'roles',
            'ar_model' => 'الأدوار',
            'status' => 'active',
            'company_id' => 1
        ]);
        \App\Models\App::create([
            'model' => 'apps',
            'ar_model' => 'التحكم في التطبيقات',
            'status' => 'active',
            'company_id' => 1
        ]);
        \App\Models\App::create([
            'model' => 'customers',
            'ar_model' => 'العملاء',
            'status' => 'active',
            'company_id' => 1
        ]);

        \App\Models\App::create([
            'model' => 'customer-addresses',
            'ar_model' => 'عناوين العملاء',
            'status' => 'active',
            'company_id' => 1
        ]);
        \App\Models\App::create([
            'model' => 'moderators',
            'ar_model' => 'المشرفين',
            'status' => 'active',
            'company_id' => 1
        ]);
        \App\Models\App::create([
            'model' => 'trucks',
            'ar_model' => 'الشاحنات',
            'status' => 'active',
            'company_id' => 1
        ]);
        \App\Models\App::create([
            'model' => 'employees',
            'ar_model' => 'الموظفين',
            'status' => 'active',
            'company_id' => 1
        ]);

        \App\Models\App::create([
            'model' => 'containers',
            'ar_model' => 'الحاويات',
            'status' => 'active',
            'company_id' => 1
        ]);

        \App\Models\App::create([
            'model' => 'contracts',
            'ar_model' => 'العقود',
            'status' => 'active',
            'company_id' => 1
        ]);
        \App\Models\App::create([
            'model' => 'container-rentals',
            'ar_model' => 'إيجار الحاويات',
            'status' => 'active',
            'company_id' => 1
        ]);
        \App\Models\App::create([
            'model' => 'customer-addresses',
            'ar_model' => 'عناوين العملاء',
            'status' => 'active',
            'company_id' => 1
        ]);
    }
}
