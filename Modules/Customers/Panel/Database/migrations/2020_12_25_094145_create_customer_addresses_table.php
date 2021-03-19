<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();
            $table->text('lan');
            $table->text('len');
            $table->text('address');
            $table->integer('plaque');
            $table->integer('unit');
            $table->integer('postal_code');
            $table->string('recipient_firstname');
            $table->string('recipient_lastname');
            $table->integer('recipient_national_code');
            $table->integer('recipient_mobile');
            $table->boolean('is_main');
            $table->foreignId('customer_id');
            $table->foreignId('state_id');
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_addresses');
    }
}
