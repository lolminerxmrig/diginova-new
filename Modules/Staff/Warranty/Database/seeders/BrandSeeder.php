<?php

namespace Modules\Staff\Brand\Database\seeders;

use Illuminate\Database\Seeder;
use DB;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands_table = __DIR__.'/../brands.sql';
        DB::unprepared(file_get_contents($brands_table));
    }
}
