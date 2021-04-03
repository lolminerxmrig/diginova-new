<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeymentMethodValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peyment_method_values', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('intra_province')->nullable();
            $table->bigInteger('extra_province')->nullable();
            $table->bigInteger('neighboring_provinces')->nullable();
            $table->string('type');
            $table->string('status')->default('active');
            $table->foreignId('peyment_method_id');
            $table->timestamps();

            $table->foreign('peyment_method_id')->references('id')->on('peyment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peyment_method_values');
    }

}
