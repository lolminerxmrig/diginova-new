<?php

namespace Modules\Staff\Unit\Database\seeders;

use Illuminate\Database\Seeder;
use DB;


class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = __DIR__.'/../units.sql';
        DB::unprepared(file_get_contents($units));

        $unit_values = __DIR__.'/../unit_values.sql';
        DB::unprepared(file_get_contents($unit_values));
    }
}
