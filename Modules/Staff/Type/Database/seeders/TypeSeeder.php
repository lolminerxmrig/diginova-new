<?php

namespace Modules\Staff\Type\Database\seeders;

use Illuminate\Database\Seeder;
use DB;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = __DIR__.'/../types.sql';
        DB::unprepared(file_get_contents($types));
    }
}
