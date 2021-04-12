<?php

namespace Modules\Staff\Order\Database\seeders;

use Illuminate\Database\Seeder;
use DB;


class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders_table = __DIR__.'/../orders.sql';
        DB::unprepared(file_get_contents($orders_table));
    }
}
