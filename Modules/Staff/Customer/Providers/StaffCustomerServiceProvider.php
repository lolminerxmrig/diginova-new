<?php

namespace Modules\Staff\Customer\Providers;

use Faker\Factory;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory as ModelFactory;


class StaffCustomerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'staffcustomer');

        Relation::morphMap([
            'Customer' => 'Modules\Staff\Customer\Models\Customer',
        ]);
    }

}