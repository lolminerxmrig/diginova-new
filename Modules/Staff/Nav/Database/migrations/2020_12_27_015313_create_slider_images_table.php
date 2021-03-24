<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_images', function (Blueprint $table) {
            $table->id();
            $table->text('alt')->nullable();
            $table->text('link')->nullable();
            $table->text('status')->nullable();
            $table->foreignId('nav_id')->nullable();
            $table->foreignId('position')->nullable();
            $table->timestamps();

            $table->foreign('nav_id')->references('id')->on('navs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nav_images');
    }
}
