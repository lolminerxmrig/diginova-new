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
            $table->string('promotion_type')->nullable();
            $table->bigInteger('promotion_price')->nullable();
            $table->integer('promotion_percent')->nullable();
            $table->foreignId('product_id')->nullable();
            $table->foreignId('order_id')->nullable();
            $table->foreignId('consignment_id')->nullable();
            $table->foreignId('product_variant_id')->nullable();
            $table->foreignId('order_status_id')->nullable();
            $table->foreignId('customer_id')->nullable();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('consignment_id')->references('id')->on('order_has_consignments')->onDelete('cascade');
            $table->foreign('order_status_id')->references('id')->on('order_status');
            $table->foreign('product_variant_id')->references('id')->on('product_has_variants');
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
        Schema::dropIfExists('consignment_has_product_variants');
    }
}
