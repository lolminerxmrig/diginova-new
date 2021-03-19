<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_favorites', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_sms');
            $table->boolean('is_email');
            $table->boolean('is_notification');
            $table->foreignId('customer_id');
            $table->foreignId('product_id');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_favorites');
    }
}
