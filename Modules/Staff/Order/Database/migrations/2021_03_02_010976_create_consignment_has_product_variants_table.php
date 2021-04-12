<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsignmentHasProductVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignment_has_product_variants', function (Blueprint $table) {
            $table->id();
            $table->integer('count')->nullable();
            $table->bigInteger('variant_price')->nullable();
            $table->bigInteger('promotion_price')->nullable();
            $table->integer('promotion_percent')->nullable();
            $table->foreignId('product_id')->nullable();
            $table->foreignId('order_id')->nullable();
            $table->foreignId('consignment_id')->nullable();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('consignment_id')->references('id')->on('order_has_consignments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consignment_has_product_variants');
    }
}
