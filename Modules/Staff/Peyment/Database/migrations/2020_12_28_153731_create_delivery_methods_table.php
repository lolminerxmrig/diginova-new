<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peyment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('active');
            $table->bigInteger('free_shipping_min_cost')->nullable();
            $table->bigInteger('peyment_cost')->nullable();
            $table->foreignId('cost_det_type_id')->comment('cost determination type');
            $table->timestamps();

            $table->foreign('cost_det_type_id')->references('id')->on('peyment_cost_det_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peyment_methods');
    }

}
