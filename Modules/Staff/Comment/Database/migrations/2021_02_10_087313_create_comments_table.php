<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->nullable();
            $table->text('text');
            $table->string('title')->nullable();
            $table->json('advantages')->nullable();
            $table->json('disadvantages')->nullable();
            $table->boolean('is_anonymous')->default(0);
            $table->boolean('is_recommended')->nullable();
            $table->integer('publish_status')->default(0);
            $table->foreignId('product_id');
            $table->foreignId('customer_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('comments');
    }
}
