<?php

namespace Modules\Staff\Warranty\Database\seeders;

use Illuminate\Database\Seeder;
use DB;


class WarrantySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warranties_table = __DIR__.'/../warranties.sql';
        DB::unprepared(file_get_contents($warranties_table));
    }
}
