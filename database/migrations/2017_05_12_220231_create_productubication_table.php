<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductubicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('product_ubication', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('prod_id')->unsigned();
          $table->integer('ubic_id')->unsigned();
          $table->integer('stock');

          $table->foreign('prod_id')->references('id')->on('products');
          $table->foreign('ubic_id')->references('id')->on('ubications');


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
        Schema::dropIfExists('product_ubication');
    }
}
