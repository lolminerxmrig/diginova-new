<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductHasVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_has_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('variant_id');
            $table->foreignId('warranty_id');
            $table->string('shipping_type')->default('site');
            $table->string('status')->default('1');
            $table->integer('post_time');
            $table->integer('max_order_count');
            $table->integer('stock_count');
            $table->morphs('variantable');
            $table->timestamps();

            $table->foreign('variant_id')->references('id')->on('variants');
            $table->foreign('warranty_id')->references('id')->on('warranties');
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
        Schema::dropIfExists('product_type');
    }
}
