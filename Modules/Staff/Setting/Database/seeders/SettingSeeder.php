<?php

namespace Modules\Staff\Setting\Database\seeders;

use Illuminate\Database\Seeder;
use DB;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings_table = __DIR__ . '/../settings.sql';
        DB::unprepared(file_get_contents($settings_table));
    }
}
