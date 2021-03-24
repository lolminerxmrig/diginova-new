<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'site_name',
            'value' => 'دیجی نوا',
        ]);

        Setting::create([
            'name' => 'site_url',
            'value' => 'http://diginova.test',
        ]);

        Setting::create([
            'name' => 'management_subdomain',
            'value' => 'staff',
        ]);

        Setting::create([
            'name' => 'product_code_prefix',
            'value' => 'DNP',
        ]);

        Setting::create([
            'name' => 'product_title_prefix',
            'value' => 'مشخصات، قیمت و خرید',
        ]);

        Setting::create([
          'name' => 'site_title',
          'value' => 'فروشگاه اینترنتی دیجی‌نوا',
        ]);

        Setting::create([
          'name' => 'description',
          'value' => 'متن آزمایشی',
        ]);

        Setting::create([
          'name' => 'keywords',
          'value' => 'تست, تست دو',
        ]);

    }
}
