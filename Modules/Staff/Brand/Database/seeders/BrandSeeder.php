<?php

namespace Modules\Staff\Brand\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\Staff\Brand\Models\Brand;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'سامسونگ',
            'en_name' => 'samsung',
            'description' => 'تست',
            'type' => 1,
            'image_id' => 1,
            'slug' => 'samsung',
            'category_id' => 2,
        ]);
    }
}
