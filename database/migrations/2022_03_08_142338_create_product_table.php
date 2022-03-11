<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('img', 255)->nullable();
            $table->string('description')->nullable();
            $table->string('categori_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('is_top')->nullable();
            $table->integer('on_sale')->nullable();
            $table->string('sale')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('product');
    }
};
