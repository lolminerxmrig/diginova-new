<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('en_name');
            $table->text('description');
            $table->string('slug');
            $table->boolean('type')->nullable();
            $table->integer('category_id');
            $table->foreignId('media_id')->constrained('media', 'id');
            $table->timestamps();

            $table->foreign('media_id')->references('id')
                ->on('media')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
