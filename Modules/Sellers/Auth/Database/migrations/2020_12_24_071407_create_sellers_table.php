<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->nullable();
            $table->integer('mobile')->nullable();
            $table->integer('type')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('gender')->nullable();
            $table->integer('national_code')->nullable();
            $table->integer('identity_card_number')->nullable();
            $table->integer('phone')->nullable();
            $table->string('business_name')->nullable();
            $table->integer('shabaـnumber')->nullable();
            $table->integer('mainـcatـid')->nullable();
            $table->integer('approx_products_number')->nullable();
            $table->integer('vat_status')->nullable();
            $table->string('vat_image')->nullable();
            $table->string('card_image_front')->nullable();
            $table->string('card_image_back')->nullable();
            $table->integer('online_sales_exp')->nullable();
            $table->integer('training_time_id')->nullable();
            $table->integer('extra_person_status')->nullable();
            $table->integer('contractـstatus')->nullable();
            $table->integer('training_status')->nullable();
            $table->integer('documents_status')->nullable();
            $table->integer('seller_code')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
}
