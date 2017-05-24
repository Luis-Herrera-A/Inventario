<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('purchase_product', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('prod_id')->unsigned();
          $table->integer('purchases_id')->unsigned();

          $table->foreign('prod_id')->references('id')->on('products');
          $table->foreign('purchases_id')->references('id')->on('purchases');


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
        Schema::dropIfExists('purchase_product');
    }
}
