<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->Increments('id');
            $table->string('name');
            $table->integer('categories_id');
            $table->integer('price');
            $table->integer('quantity');
            $table->text('description');
            $table->integer('promotion_price');
            $table->text('image');
            $table->boolean('status')->default(1);
//            $table->boolean('bestseller')->default(0);
//            $table->integer('sold')->default(0);
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
