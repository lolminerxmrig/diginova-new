<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call('Modules\Staff\Auth\Database\seeders\StaffSeeder');
//        $this->call('Modules\Staff\Category\Database\seeders\CategorySeeder');
//        $this->call('Modules\Staff\Brand\Database\seeders\BrandSeeder');
        $this->call('Modules\Customers\Auth\Database\seeders\CustomerSeeder');
    }
}
