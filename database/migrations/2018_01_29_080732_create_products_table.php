<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
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
            $table->integer('quantity');
            $table->string('serial');
            $table->boolean('status')->default(1);
            $table->integer('brand_id')->nullable()->unsigned();
            $table->integer('manufacture_id')->nullable()->unasigned();
            $table->integer('category_id')->nullable()->unasigned();
            $table->integer('description_id')->nullable()->unasigned();
            $table->integer('location_id')->nullable()->unasigned();
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
        Schema::dropIfExists('products');
    }
}
