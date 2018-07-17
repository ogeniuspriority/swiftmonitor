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
            $table->string('name',100);
            $table->string('age',100);
            $table->string('gender',10);
            $table->string('brand',50);
            $table->string('category',50);
            $table->integer('pieces');
            $table->integer('initialpriceperunit');
            $table->integer('minimumpriceperunit');
            $table->integer('maximumpriceperunit');
            $table->string('color');
            $table->text('description');
            $table->text('careinstructions');
            $table->string('material');
            $table->string('code');
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
