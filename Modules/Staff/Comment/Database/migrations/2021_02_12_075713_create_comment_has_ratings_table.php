<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentHasRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_has_ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('score');
            $table->foreignId('comment_id');
            $table->foreignId('rating_id');
            $table->foreignId('product_id');
            $table->timestamps();
//            $table->softDeletes();

            $table->foreign('comment_id')->references('id')->on('comments');
            $table->foreign('rating_id')->references('id')->on('comment_has_ratings');
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
        Schema::dropIfExists('comment_has_ratings');
    }
}
