<?php

namespace Modules\Staff\Voucher\Database\seeders;

use Illuminate\Database\Seeder;
use DB;


class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vouchers_table = __DIR__ . '/../vouchers.sql';
        DB::unprepared(file_get_contents($vouchers_table));
    }
}
