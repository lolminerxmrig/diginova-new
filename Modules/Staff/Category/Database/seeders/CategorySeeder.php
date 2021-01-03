<?php

namespace Modules\Staff\Category\Database\seeders;

use Illuminate\Database\Seeder;
use Modules\Staff\Category\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'کالای دیجیتال',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 0,
        ]);

        Category::create([
            'name' => 'مد و پوشاک',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 0,
        ]);

        Category::create([
            'name' => 'لوازم جانبی گوشی',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 1,
        ]);

        Category::create([
            'name' => 'گوشی موبایل',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 1,
        ]);

        Category::create([
            'name' => 'لباس مردانه',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 2,
        ]);

        Category::create([
            'name' => 'لباس زنانه',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 2,
        ]);

        Category::create([
            'name' => 'سامسونگ',
            'en_name' => 'digital',
            'image_id' => 4,
            'slug' => 'test',
            'parent_id' => 9,
        ]);

        Category::create([
            'name' => 'هواوی',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 9,
        ]);

        Category::create([
            'name' => 'ساده',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 4,
        ]);

        Category::create([
            'name' => 'لمسی',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 4,
        ]);

        Category::create([
            'name' => 'سری a',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 7,
        ]);

        Category::create([
            'name' => 'سری b',
            'en_name' => 'digital',
            'image_id' => 1,
            'slug' => 'test',
            'parent_id' => 7,
        ]);
    }
}
