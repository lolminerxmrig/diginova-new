<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryMethodValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_method_values', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('intra_province');
            $table->bigInteger('extra_province');
            $table->bigInteger('neighboring_provinces');
            $table->string('status')->default('active');
            $table->foreignId('delivery_method_id');
            $table->timestamps();

            $table->foreign('delivery_method_id')->references('id')->on('delivery_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_method_values');
    }

}
