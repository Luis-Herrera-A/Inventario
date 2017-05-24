<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('providers', function (Blueprint $table) {
         $table->increments('id');
         $table->string('nombre',50);
         $table->string('rut',20);
         $table->string('telefono',20);
         $table->string('direccion',100);
         $table->string('email',100)->unique();
         $table->boolean('estado')->default(true);
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
         Schema::dropIfExists('providers');
    }
}
