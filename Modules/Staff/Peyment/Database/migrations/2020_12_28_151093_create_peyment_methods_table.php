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
            $table->string('description')->nullable();
            $table->longText('iv')->nullable();
            $table->longText('username')->nullable();
            $table->longText('password')->nullable();
            $table->longText('merchantId')->nullable();
            $table->longText('terminalId')->nullable();
            $table->longText('sha1Key')->nullable();
            $table->longText('terminalCode')->nullable();
            $table->longText('key')->nullable();
            $table->timestamps();
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
